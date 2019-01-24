<?php

namespace App\Traits;


use App\classes\Message;
use App\interfaces\Send;
use App\Traits\Execute;
class SendMessage implements Send
{
    public $msg;


    public function prepare(array $arguments)
    {
        $message =
            [
                'chat_id' => $arguments['chat_id'],
                'text' => $arguments['text'],
                'parse_mode' => $arguments['parse_mode'] ?? 'HTML',
                'disable_web_page_preview' => $arguments['disable_web_page_preview'] ?? 'true',
                'disable_notification' => $arguments['disable_notification'] ?? 'false',
                'reply_to_message_id' => $arguments['reply_to_message_id'] ?? 0,

            ];

        $this->msg = json_encode($message);
    }
}