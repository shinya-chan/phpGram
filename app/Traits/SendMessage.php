<?php

namespace App\Traits;


use App\classes\Message;
use App\interfaces\Send;
use App\Traits\Execute;

class SendMessage implements Send
{
    public $msg;

    use Execute;

    public function prepare(array $arguments)
    {
        $message =
            ([
                'chat_id' => $arguments['chat_id'],
                'text' => $arguments['text'],
                $arguments['parse_mode'] ?? 'parse_mode' => $arguments['parse_mode'],
                $arguments['disable_web_page_preview'] ?? 'disable_web_page_preview' => $arguments['disable_web_page_preview'],
                $arguments['disable_notification'] ?? 'disable_notification' => $arguments['disable_notification'],
                $arguments['reply_to_message_id'] ?? 'reply_to_message_id' => $arguments['reply_to_message_id'],
                $arguments['reply_markup'] ?? 'reply_markup' =>  $arguments['reply_markup']

            ]);

        $this->msg = json_encode($message);
    }
}