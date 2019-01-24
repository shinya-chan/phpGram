<?php
/**
 * Created by PhpStorm.
 * User: alastor
 * Date: 24-Jan-19
 * Time: 4:44 PM
 */

namespace App\Traits;


use GuzzleHttp\Client;

trait Execute {
    /**
     * @param $api
     * @param $method
     * @param $parameters
     *
     * @return mixed
     */
    public function send ( $api, $method, $parameters ) {
        $client = new Client(
            [
                "base_uri" => 'https://api.telegram.org/bot' . $api . '/'
            ]
        );

        return json_decode(
            $client->post(
                $method,
                [
                    "query" => $parameters
                ]
            )->getBody()
        );
    }
}