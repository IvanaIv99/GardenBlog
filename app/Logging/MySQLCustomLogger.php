<?php
namespace App\Logging;
use Monolog\Logger;
use App\Logging\MySQLLoggingHandler;

class MySQLCustomLogger
{

    public function __invoke(array $config){
        $logger = new Logger("MySQLLoggingHandler");
        return $logger->pushHandler(new MySQLLoggingHandler());

    }
}
