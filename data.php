<?php

require 'vendor/autoload.php';

$client = new GuzzleHttp\Client([
        'base_uri' => 'https://cdn.rawgit.com/akabab/superhero-api/0.2.0/api/',
    ]
);
$response = $client->request('GET', 'all.json');
$rslt = $response->getBody();
$data = $rslt->getContents();

$dataArray = json_decode($data, true);

// $dataArray est un tableau qui contient toutes les données des héros
