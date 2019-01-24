<?php

namespace App\Traits;


use App\interfaces\Send;

class ForwardMessage implements Send {

    public $msg;

    public function send () {

    }

    public function prepare ( array $arguments) {
        $this->msg = json_encode([
            "text" => $arguments['text']
        ]);
    }

}