<?php
/**
 * Created by PhpStorm.
 * User: alastor
 * Date: 24-Jan-19
 * Time: 5:23 PM
 */

namespace App\Traits;


class getUserProfilePhotos {

    public $shell;

    use Execute;

    public function prepare ( array $arguments ) {
        $shell = [
          "user_id" => $arguments["user_id"],
          $arguments["offset"] ?? "offset" => $arguments["offset"],
          $arguments["limit"] ?? "limit" => $arguments["limit"],
        ];
        $this->shell = json_encode($shell);
    }
}