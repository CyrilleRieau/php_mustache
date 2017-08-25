<?php

require 'vendor/autoload.php';

$client = new \GuzzleHttp\Client();

$response = $client->request('GET', 'https://dog.ceo/api/breeds/list/all');

echo $response->getStatusCode();
echo $response->getBody();
echo "\n";
$obj = json_decode($response->getBody(),true);
var_dump($obj);
echo "\n";
//var_dump($obj->message->wolfhound);
var_dump($obj['message']['wolfhound']);