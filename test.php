<?php
//namespace Hackathon;

require 'data.php';
require 'class.php';

$n = rand(1, 563);

$char1 = new heroes($dataArray[$n]);
$testChar = new heroes($dataArray[55]);
$enemy = new heroes($dataArray[44]);
//var_dump($char1);
//echo $char1->getsSats();




//var_dump($n);
//echo $dataArray[$n]['powerstats']['strength'];