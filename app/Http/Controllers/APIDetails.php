<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ImportDets;
class APIDetails extends Controller
{
 
    private function get_srv_uptime(){
        // execute shell command and return string nicely formatted
        return trim(str_replace('up','', shell_exec('uptime -p')));
    }
    private function get_db_uptime(\PDO $pdo){
        // match uptime timestamp from meta information about the db 
        preg_match("/Uptime: ([0-9]*)/", $pdo->getAttribute(\PDO::ATTR_SERVER_INFO), $out);
        // convert timestamp to pretty format (same as srv_uptime)
        $date_arr = explode(':',gmdate('z:H:i:s', $out[1]));
        $it = array_map('intval', ($date_arr));
        if($it[0]>365){
            return '>365 days';
        }
        $days = $it[0] ? ($it[0] > 1 ? ' days, ' : ' day, ') : ''; 
        $hours = $it[1] ? ($it[1] > 1 ? ' hours, ' : ' hour, ') : ''; 
        $minutes = $it[2] ? ($it[2] > 1 ? ' minutes' : ' minute') : '';
        $date_arr = array_map(function ($e) {
            return ltrim($e, "0");}, $date_arr);
        $pretty = $date_arr[0] . $days . $date_arr[1] . $hours . $date_arr[2] . $minutes;
        return $pretty !="" ? $pretty : $date_arr[3] . ' seconds';
    }
    private function get_srv_memory_usage(){
        // execute shell command to display memory information
        $free = trim(shell_exec('free -h --si'));
        // transform output to filter used memory
        $free_arr = explode("\n", $free);
        $mem = explode(" ", $free_arr[1]);
        $mem = array_filter($mem);
        $mem = array_merge($mem);
        return $mem[2] . "B";
    }
    private function get_last_import(){
        // attempt to get last updated importdets model
        $last_import = ImportDets::orderByDesc('updated_at')
            ->first();
        // return last update nicely formatted or "unperformed" if no model was found
        if($last_import){
            return $last_import->updated_at->format('Y-m-d\\TH:i:s\Z');
        }
        return "unperformed";
    }
    public function __invoke(Request $request)
    {
        $db_ok = True;
        try{
            $pdo = DB::connection()->getPdo();
        }catch(\Exception){
            $db_ok = False;
        }
        $connection = $db_ok ? 'OK' : 'FAILED';
        $details = [
            'db_connection' => $connection,
            'last_data_import' => self::get_last_import(),
            'db_uptime' => self::get_db_uptime($pdo),
            'server_uptime' =>self::get_srv_uptime(),
            'server_memory_usage' =>self::get_srv_memory_usage(),
        ];
        return response()->json($details);
    }
}
