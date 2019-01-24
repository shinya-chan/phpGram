<?php
/**
 * Created by PhpStorm.
 * User: alastor
 * Date: 24-Jan-19
 * Time: 3:38 PM
 */

namespace App\classes;


class Message {
    public $text;
    public $audio;
    public function __construct (array $arguments) {
        $this->text = $arguments['text'] ?? null;
    }


    public function to_array (  ) {
        // TODO : add all non-null property to single array
    }
}