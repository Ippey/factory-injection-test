<?php


namespace App\Service;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class QiitaService
{
    private $client;
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getUser($userId)
    {
        try {
            $response = $this->client->get('api/v2/users/' . $userId);
            return json_decode((string) $response->getBody(), true);
        } catch (ClientException $e) {
            return null;
        }
    }
}