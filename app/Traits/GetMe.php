<?php
/**
 * Created by PhpStorm.
 * User: alastor
 * Date: 24-Jan-19
 * Time: 4:20 PM
 */

namespace App\Traits;


use App\interfaces\Method;

class GetMe implements Method {

    public $method;

    public function prepare ( array $arguments ) {
        $this->method = [
            "method" => "getMe"
        ];

    }

    public function execute ( $api ) {

    }
}