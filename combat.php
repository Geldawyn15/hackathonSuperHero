<?php
require 'test.php';

echo $testChar->speed. "<br>";
echo $testChar->getStats(). "<br>";
echo $enemy->getStats(). "<br>";

$turn = 0;

if ($turn == 0){
    $attacker = $testChar;
    $target = $enemy;
}elseif ($turn == 1){
    $attacker = $enemy;
    $target = $testChar;
}
$dodge = $target->dodge($target);
if ($dodge == 0) {
    echo $attacker->attack($attacker, $target);
}else {
    echo $target->health;
}










?>


