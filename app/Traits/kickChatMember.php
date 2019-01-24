<?php

namespace App\Traits;


class kickChatMember {
    
    use Execute;
    
    public $shell;

    public function prepare ( array $arguments ) {

        $shell = [
            "chat_id" => $arguments["chat_id"],
            "user_id" => $arguments["user_id"],
            $arguments["until_date"] ?? "until_date" => $arguments["until_date"]
        ];
        $this->shell = json_encode($shell);
    }
}