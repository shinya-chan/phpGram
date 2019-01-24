<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 1/24/2019
 * Time: 4:57 PM
 */

namespace App\Traits;


use App\interfaces\Send;
use App\Traits\Execute;


class SendPhoto implements Send{
    public $msg;

    public function prepare(array $arguments)
    {
        $message = ([
            'chat_id' => $arguments['chat_id'],
            'photo' => $arguments['photo'],
            'caption' => $arguments['caption'],
            'parse_mode' => $arguments['parse_mode'] ?? 'HTML',
            'disable_notification' => $arguments['disable_notification'] ?? 'false',
            'reply_to_message_id' => $arguments['reply_to_message_id'] ?? 0,
        ]);

        $this->msg = json_encode($message);
    }
}