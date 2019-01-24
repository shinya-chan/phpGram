<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 1/24/2019
 * Time: 5:32 PM
 */

namespace App\Traits;


use App\interfaces\Send;
use App\Traits\Execute;

class SendVideo implements Send
{
    public $msg;
    use Execute;

    public function prepare(array $arguments)
    {
        $message = ([
            'chat_id' => $arguments['chat_id'],
            'video' => $arguments['video'],
            $arguments['duration'] ?? 'duration' => $arguments['duration'],
            $arguments['width'] ?? 'width' => $arguments['width'],
            $arguments['height'] ?? 'height' => $arguments['height'],
            $arguments['thumb'] ?? 'thumb' => $arguments['thumb'],
            $arguments['caption'] ?? 'caption' =>  $arguments['caption'],
            $arguments['parse_mode'] ?? 'parse_mode' =>  $arguments['parse_mode'],
            $arguments['supports_streaming'] ?? 'supports_streaming' =>  $arguments['supports_streaming'],
            $arguments['disable_notification'] ?? 'disable_notification' =>  $arguments['disable_notification'],
            $arguments['reply_to_message_id'] ?? 'reply_to_message_id' =>  $arguments['reply_to_message_id'],
            $arguments['reply_markup'] ?? 'reply_markup' =>  $arguments['reply_markup']
        ]);

        $this->msg = json_encode($message);
    }
}