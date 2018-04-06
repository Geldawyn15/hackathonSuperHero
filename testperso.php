<?php
require_once 'data.php';
$mainCharacter = [$realDataArray[9], $realDataArray[52], $realDataArray[257], $realDataArray[550], $realDataArray[435],
$realDataArray[191], $realDataArray[313], $realDataArray[325], $realDataArray[365], $realDataArray[412], $realDataArray[490], $realDataArray[464]];
?>

<! DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style2.css"/>

</head>
<body>
<h1 class="title">Choix du personnage</h1>
<div class="container">
    <div class="row">
    <?php
foreach ($mainCharacter as $toto) {

    $int = $toto['powerstats']['intelligence'];
    $str = $toto['powerstats']['strength'];
    $spd = $toto['powerstats']['speed'];
    $dur = $toto['powerstats']['durability'];
    $pow = $toto['powerstats']['power'];
    $cmb = $toto['powerstats']['combat'];


?>

<div class="col-md-3 offset-1">
                <h2 class="name"><?= $toto['name'] ?></h2>


                <a href="caroussel.php?id_user_char=<?=$toto['id']?>">

                    <img src="<?=$toto['images']['md']?>" >
                </a>

                <table class="table">
                <thead>
                <tr>
                    <th scope="col">INT</th>
                    <th scope="col">STR</th>
                    <th scope="col">SPD</th>
                    <th scope="col">DUR</th>
                    <th scope="col">POW</th>
                    <th scope="col">CMB</th>
                </tr>
                </thead>
                <tbody>


                <tr>
                    <td scope="col"><?= $int ?></td>
                    <td scope="col"><?= $str ?></td>
                    <td scope="col"><?= $spd ?></td>
                    <td scope="col"><?= $dur ?></td>
                    <td scope="col"><?= $pow ?></td>
                    <td scope="col"><?= $cmb ?></td>
                </tr>
                </tbody>
            </table></div>
                <?php
        }
        ?>