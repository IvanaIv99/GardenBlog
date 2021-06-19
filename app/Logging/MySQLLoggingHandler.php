<?php
namespace App\Logging;
// use Illuminate\Log\Logger;
use App\Models\LogActivity;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Monolog\Logger;
use Monolog\Handler\AbstractProcessingHandler;
class MySQLLoggingHandler extends AbstractProcessingHandler{

    public function __construct($level = Logger::DEBUG, $bubble = true) {
        $this->table = 'log_activity';
        parent::__construct($level, $bubble);
    }
    protected function write(array $record):void
    {
        LogActivity::create([
            'subject'=>$record['message'],
            'ip'   => $_SERVER['REMOTE_ADDR'],
            'url'    => $_SERVER['REQUEST_URI'],
            'user_id'=> Session::get('user')->id
        ]);
    }
}
