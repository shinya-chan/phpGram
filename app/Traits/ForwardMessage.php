<?php

namespace App\Traits;


use App\interfaces\Send;

class ForwardMessage implements Send
{

    public $msg;

    use Execute;

    public function prepare(array $arguments)
    {
        $message = ([
            'chat_id' => $arguments['chat_id'],
            'from_chat_id' => $arguments['from_chat_id'],
            $arguments['disable_notification'] ?? 'disable_notification' => $arguments['disable_notification'],
            'message_id' => $arguments['message_id'],
            $arguments['reply_markup'] ?? 'reply_markup' =>  $arguments['reply_markup']
        ]);

        $this->msg = json_encode($message);
    }

}