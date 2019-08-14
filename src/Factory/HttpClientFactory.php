<?php


namespace App\Factory;

use GuzzleHttp\Client;

class HttpClientFactory
{
    public static function create($baseUri)
    {
        $httpClient = new Client(['base_uri' => $baseUri, 'timeout' => 2]);
        return $httpClient;
    }
}