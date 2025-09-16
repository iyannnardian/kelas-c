<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();
$response = $client->request('GET', 'https://jsonplaceholder.typicode.com/posts/1');

// ambil isi body response
$body = $response->getBody();

// tampilkan hasil
echo $body;
