<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />

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

$realData = [];
foreach ($dataArray as $key => $v) {
    $realData[$v['id']] = $v;
}
