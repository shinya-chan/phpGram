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

    public function prepare(array $arguments)
    {
        $message = ([
           'chat_id' => $arguments['chat_id'],
           'audio' => $arguments['audio'],
            'caption' => $arguments['caption'],
            'parse_mode' => $arguments['parse_mode'] ?? 'HTML',
            'duration' => $arguments['duration'],
            'performer' => $arguments['performer'],
            'title' => $arguments['title'],
            'thumb' => $arguments['thumb'] ?? null,
            'disable_notification' => $arguments['disable_notification'] ?? 'false',
            'reply_to_message_id' => $arguments['reply_to_message_id'] ?? 0,
            'reply_markup' => $arguments['reply_markup']
        ]);

        $this->msg = json_encode($message);

    }

}