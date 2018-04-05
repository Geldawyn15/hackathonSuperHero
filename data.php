<?php

require 'vendor/autoload.php';

// Create a client with a base URI
$client = new GuzzleHttp\Client([
        'base_uri' => 'https://cdn.rawgit.com/akabab/superhero-api/0.2.0/api/',
    ]
);
// Send a request to https://foo.com/api/test
$response = $client->request('GET', 'all.json');
// or
// Send request https://foo.com/api/test?key=maKey&name=toto
/*$response = $client->request('GET', 'test', [
        'key'  => 'maKey',
        'name' => 'toto',
    ]
);

//Afficher une response*/
$body = $response->getBody();
echo $body->getContents();
