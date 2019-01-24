<?php

namespace App\Traits;


use App\interfaces\Send;

class ForwardMessage implements Send {

    public $msg;

    public function send () {

    }

    public function prepare ( array $arguments) {
        $message = ([
            'chat_id' => $arguments['chat_id'],
            'from_chat_id' => $arguments['from_chat_id'],
            'disable_notification' => $arguments['disable_notification'] ?? 'false',
            'message_id' => 'message_id'
        ]);
        $this->msg = json_encode($message);
    }

}