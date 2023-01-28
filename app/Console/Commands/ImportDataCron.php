<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\ImportDets;
use App\Models\Product;

class ImportDataCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import data from Open Food Facts Project to DB';

    /**
     * Execute the console command.
     *
     * @return int
     */
    private const INDEX_URL = "https://challenges.coode.sh/food/data/json/index.txt";
    private const FILES_BASE_URL = "https://challenges.coode.sh/food/data/json/{filename}";
    private const QTY_PRODUCTS_PER_IMPORT = 100;
    private function insert_record(string $data){
        $data = json_decode($data, true);
        $result = Product::findOr($data['code'], function () use ($data) {
            $data['serving_quantity'] = floatval($data['serving_quantity']);
            $data['created_t'] = intval($data['created_t']);
            $data['last_modified_t'] = intval($data['last_modified_t']);
            $data['nutriscore_score'] = intval($data['nutriscore_score']);
            $data['status'] = 'published';
            Product::create($data);
            return False;
        });
        if($result){
            // TODO notify
            $this->info($result->code . " was already imported.");
            return False;
        }
        return True;
    }
    private function stream_file(string $filename, int $offset = 0)
    {
        // replace {filename} with the actual file name 
        $url = preg_replace("/{filename}/", $filename, self::FILES_BASE_URL);
        // create context for the stream with http options and notificatiom param
        $ctx = stream_context_create(
            [
                'http' => [
                    'method' => 'GET',
                    'header' => [
                        "Accept-Encoding: gzip",
                        'Content-Type: application/json',
                        'Connection: close',
                    ],
                ]
            ],
            ['notification' => 'self::stream_notification_callback']
        );
        // open url in read mode with context
        $fp = fopen($url, "r", false, $ctx);
        $count = 0;
        // append filter to the stream to decompress the data when reading it
        stream_filter_append($fp, "zlib.inflate", STREAM_FILTER_READ, ["window" => 47]);
        if ($fp) {
            // loop through each line till QTY_PRODUCTS_PER_IMPORT new products were generated or file reached the end 
            while (($line = fgets($fp)) !== false && $count < self::QTY_PRODUCTS_PER_IMPORT) {
                // ignore line if pointer is less or equal to offset value -- file not seekable
                if (ftell($fp) <= $offset) {
                    continue;
                }
                // generate clean data
                yield preg_replace('/\\\\";*\\R*/', '', $line);
                $count++;
            }
            // test if loop terminated due to fgets() error
            if (!feof($fp) && $count != self::QTY_PRODUCTS_PER_IMPORT) {
                error_log("Error: Could not read product " . strval($count) . " from " . $filename . ". Position: " . strval(ftell($fp)) . "\n");
            }
            // generate value for the stream offset
            yield ftell($fp);
            fclose($fp);
        }
    }
    public function handle()
    {
        $this->info(date("F j, Y, g:i A") . ' - ' . $this->signature . ' started.');
        $start = microtime(true);
        // get list with filenames from index url
        $files = explode("\n", file_get_contents(self::INDEX_URL));
        array_pop($files); // pop empty line
        foreach ($files as $filename) {
            // retrieve detail from previous import of this file, or generate a new one if inexistent
            $import = ImportDets::firstOrNew(['filename' => $filename]);
            // get iterator form stream_file generator
            $iterator = $this->stream_file($filename, $import->offset);
            // loop through iterator
            while($iterator->valid()){
                $iteration = $iterator->current();
                $iterator->next();
                if(!$iterator->valid()){
                    // if this is the last iteration, the value should be the offset
                    $import->offset = $iteration;
                }else{
                    // if not, the value should be a product
                    $product = $this->insert_record($iteration);
                }
            }
            $import->save();
        }
        $this->info('Took ' . strval(round((microtime(true) - $start), 2)) . ' seconds to complete.');
        return Command::SUCCESS;
    }
    private function stream_notification_callback($notification_code, $severity, $message, $message_code, $bytes_transferred, $bytes_max)
    {
        if ($notification_code == STREAM_NOTIFY_FAILURE) {
            //TODO notify
            $this->error_log($message);
        }
    }
}