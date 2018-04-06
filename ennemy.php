<?php

function getRandomEnemy(array $da, int $statMin, int $statMax)
{
    $selectedHeores = [];
    foreach ($da as $hero) {
        $int = $hero['powerstats']['intelligence'];
        $str = $hero['powerstats']['strength'];
        $spd = $hero['powerstats']['speed'];
        $dur = $hero['powerstats']['durability'];
        $pow = $hero['powerstats']['power'];
        $cmb = $hero['powerstats']['combat'];
        $totalStats = $int + $str + $spd + $dur + $pow + $cmb;
        if ($totalStats >= $statMin && $totalStats <= $statMax) {
            $selectedHeores[] = $hero;
        }
    }
    if ($statMin == 400) {
        $randEnemy = rand(1, 62);
        $rslt = $selectedHeores[$randEnemy];
    } elseif ($statMin == 450) {
        $randEnemy = rand(1, 43);
        $rslt = $selectedHeores[$randEnemy];
    } elseif ($statMin == 500) {
        $randEnemy = rand(1, 25);
        $rslt = $selectedHeores[$randEnemy];
    }
    return $rslt;
}