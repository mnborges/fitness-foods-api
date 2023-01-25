<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

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
    private function stream_file($filename)
    {
        $url = preg_replace("/{filename}/", $filename, self::FILES_BASE_URL);
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
        $fp = fopen($url, "r", false, $ctx);
        $buffer = "";
        $count = 0;
        //TODO create import collection and retrieve offset of this file from it
        $offset = 0;
        // fseek($fp, $offset, SEEK_SET);
        stream_filter_append($fp, "zlib.inflate", STREAM_FILTER_READ, ["window" => 47]);
        if ($fp) {
            while (($line = fgets($fp)) !== false && $count < self::QTY_PRODUCTS_PER_IMPORT) {
                $buffer .= $line;
                $count++;
            }
            if (!feof($fp) && $count != self::QTY_PRODUCTS_PER_IMPORT) {
                error_log("Error: Could not read product " . strval($count) . " from " . $filename . ". Position: " . strval(ftell($fp)) . "\n");
            }
            //TODO update offset position of this file in the import collection with ftell
            fclose($fp);
        }
        return preg_replace('/\\\\";*\\R*/', '', $buffer);
    }
    public function handle()
    {
        $this->info(date("F j, Y, g:i a") . '- import:cron started.');
        $start = microtime(true);
        $files = explode("\n", file_get_contents(self::INDEX_URL));
        array_pop($files);
        foreach ($files as $filename) {
            $data = $this->stream_file($filename);
            //TODO validate data and insert into DB
        }
        $this->info('Took ' . strval(round((microtime(true) - $start), 2)) . ' seconds to complete.');
        return Command::SUCCESS;
    }
    private function stream_notification_callback($notification_code, $severity, $message, $message_code, $bytes_transferred, $bytes_max)
    {
        if ($notification_code == STREAM_NOTIFY_FAILURE) {
            $this->error_log($message);
        }
    }
}