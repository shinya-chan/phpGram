<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 1/24/2019
 * Time: 5:07 PM
 */

namespace App\Traits;


use App\interfaces\Send;
use App\Traits\Execute;

class SendAudio implements Send
{
    public $msg;

    use Execute;

    public function prepare(array $arguments)
    {
        $message = ([
            'chat_id' => $arguments['chat_id'],
            'audio' => $arguments['audio'],
            'caption' => $arguments['caption'],
            $arguments['parse_mode'] ?? 'parse_mode' => $arguments['parse_mode'],
            'duration' => $arguments['duration'],
            'performer' => $arguments['performer'],
            'title' => $arguments['title'],
            $arguments['thumb'] ?? 'thumb' => $arguments['thumb'],
            $arguments['disable_notification'] ?? 'disable_notification' => $arguments['disable_notification'],
            $arguments['reply_to_message_id'] ?? 'reply_to_message_id' => $arguments['reply_to_message_id'],
            $arguments['reply_markup'] ?? 'reply_markup' =>  $arguments['reply_markup']
        ]);

        $this->msg = json_encode($message);

    }

}