<?php
/**
 * Created by PhpStorm.
 * User: alastor
 * Date: 24-Jan-19
 * Time: 5:33 PM
 */

namespace App\Traits;


class unbanChatMember {

    use Execute;

    public $shell;

    public function prepare ( array $arguments ) {

        $shell = [
            "user_id" => $arguments["user_id"],
            "chat_id" => $arguments["chat_id"]
        ];
        $this->shell = json_encode($shell);
    }
}