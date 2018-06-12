<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
<link rel="stylesheet" href="test.css">

<?php

require_once 'data.php';
require_once 'character.php';

$totalStats = 0;
$selectedHeores = [];

foreach ($dataArray as $hero) {
    $int = $hero['powerstats']['intelligence'];
    $str = $hero['powerstats']['strength'];
    $spd = $hero['powerstats']['speed'];
    $dur = $hero['powerstats']['durability'];
    $pow = $hero['powerstats']['power'];
    $cmb = $hero['powerstats']['combat'];

    $name = $hero['name'];

    $totalStats = $int + $str + $spd + $dur + $pow + $cmb;

    if ($totalStats <= 450) {
        $selectedHeores[] = $hero;
    }
}
$randHero = array_rand($selectedHeores, 12);
?>
<div class="container">
    <div class="row">
        <?php
        foreach ($randHero as $eaHero) {
            $int = $selectedHeores[$eaHero]['powerstats']['intelligence'];
            $str = $selectedHeores[$eaHero]['powerstats']['strength'];
            $spd = $selectedHeores[$eaHero]['powerstats']['speed'];
            $dur = $selectedHeores[$eaHero]['powerstats']['durability'];
            $pow = $selectedHeores[$eaHero]['powerstats']['power'];
            $cmb = $selectedHeores[$eaHero]['powerstats']['combat'];
            ?>
            <div style="border: 1px solid red" class="col-xs-3">
                <p><?= $selectedHeores[$eaHero]['name'] ?></p>
                <table>
                    <tr>
                        <th>Intelligence</th>
                        <th>Force</th>
                        <th>Vitesse</th>
                        <th>Durabilité</th>
                        <th>Puissance</th>
                        <th>Combat</th>
                    </tr>
                    <tr>
                        <td><?= $int ?></td>
                        <td><?= $str ?></td>
                        <td><?= $spd ?></td>
                        <td><?= $dur ?></td>
                        <td><?= $pow ?></td>
                        <td><?= $cmb ?></td>
                    </tr>
                </table>
            </div>

            <?php
            //echo $int + $str + $spd + $dur + $pow + $cmb . ' ' .  $selectedHeores[$eaHero]['name'] . "<br>";
        }
        ?>
    </div>
</div>
<?php

die;

// 477 heros

for ($i=0; $i<12; $i++) {
    $randomNumber = rand(1, 477);
    echo $dataArray[$randomNumber]['name'] . "<br>";
}

die;

/*
$userChar = new Character($dataArray[0]);

echo $userChar->getHp();
echo "<br>";
echo $userChar->getAtk();
echo "<br>";
echo $userChar->getDodge();
*/