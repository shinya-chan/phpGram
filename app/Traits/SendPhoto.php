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


class SendPhoto implements Send
{
    public $msg;

    use Execute;

    public function prepare(array $arguments)
    {
        $message = ([
            'chat_id' => $arguments['chat_id'],
            'photo' => $arguments['photo'],
            $arguments['caption'] ?? 'caption' => $arguments['caption'],
            $arguments['parse_mode'] ?? 'parse_mode' => $arguments['parse_mode'],
            $arguments['disable_notification'] ?? 'disable_notification' => $arguments['disable_notification'],
            $arguments['reply_to_message_id'] ?? 'reply_to_message_id' => $arguments['reply_to_message_id'],
            $arguments['reply_markup'] ?? 'reply_markup' =>  $arguments['reply_markup']
        ]);

        $this->msg = json_encode($message);
    }
}