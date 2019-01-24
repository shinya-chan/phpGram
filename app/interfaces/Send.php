<?php

namespace App\interfaces;

interface Send {
    public function send ();

    public function prepare (array $arguments);

}