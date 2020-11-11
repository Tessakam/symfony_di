<?php


namespace App\Entity;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class LoggerInfo
{
    // Nice to have: change Logger to Monolog - Log file don't work
    public function LoggerInfo(string $weirdCapitalization):string
    {
        if(isset($_POST['caps'])){
           $log = new Logger('info');
           $log->pushHandler(new StreamHandler('info.log'));
           $log->info($weirdCapitalization);
        }
        return $weirdCapitalization;
    }
}
/*
--- Example monolog exercise
    case 'INFO': // 200
        $log = new Logger('INFO');
        $log->pushHandler(new StreamHandler(__DIR__ . '/Logs/info.log', Logger::INFO));
        $log->info($inputMessage);
        break

--- Initial code worked! Log file automatically created
    public function transform (string $string): string
    {
        file_put_contents('info.log', $string, FILE_APPEND );
    }
*/