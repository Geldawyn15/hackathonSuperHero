<?php
require_once 'data.php';
$mainCharacter = [$realData[11], $realData[354], $realData[604], $realData[639], $realData[571],
$realData[263], $realData[70], $realData[422], $realData[484], $realData[543], $realData[717], $realData[435]];
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