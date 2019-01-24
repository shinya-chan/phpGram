<?php

namespace App\Traits;


class getFile {

    use Execute;

    public $shell;

    public function prepare ( array $arguments ) {
        $shell = [
            "file_id" => $arguments["file_id"]
        ];

        $this->shell = json_encode($shell);
    }
}