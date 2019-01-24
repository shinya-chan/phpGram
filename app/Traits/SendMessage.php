<?php

namespace App\Traits;


use App\classes\Message;
use App\interfaces\Send;

class SendMessage implements Send  {

    public $msg;

    public function send (  ) {
        
    }

    public function prepare ( array $arguments ) {
        $message =
            [
                'text' => $arguments['text'],
                'chat_id' => $arguments['chat_id']
            ];

        $this->msg = $message;
    }
}