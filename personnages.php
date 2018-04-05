<?php
session_start();
$_SESSION['character'] =
require_once 'data.php';
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
        foreach ($randHero as $eaHero) {
            $int = $selectedHeores[$eaHero]['powerstats']['intelligence'];
            $str = $selectedHeores[$eaHero]['powerstats']['strength'];
            $spd = $selectedHeores[$eaHero]['powerstats']['speed'];
            $dur = $selectedHeores[$eaHero]['powerstats']['durability'];
            $pow = $selectedHeores[$eaHero]['powerstats']['power'];
            $cmb = $selectedHeores[$eaHero]['powerstats']['combat'];
            ?>
            <div class="col-md-3 offset-1">
                <h2 class="name"><?= $selectedHeores[$eaHero]['name'] ?></h2>


                <a href="caroussel.php?id_user_char=<?=$selectedHeores[$eaHero]['id']?>">

                    <img src="<?=$selectedHeores[$eaHero]['images']['md']?>" >
                </a> >

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
        <!--

        <div class="col-md-3 offset-1"><h2 class="name">Name</h2><a href="https://placeholder.com"><img src="http://via.placeholder.com/150x150"></a><table class="table">
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
                <td scope="col">INT</td>
                <td scope="col">STR</td>
                <td scope="col">SPD</td>
                <td scope="col">DUR</td>
                <td scope="col">POW</td>
                <td scope="col">CMB</td>
            </tr>
            </tbody>
        </table></div>
        <div class="col-md-3 offset-1"><h2 class="name">Name</h2><a href="https://placeholder.com"><img src="http://via.placeholder.com/150x150"></a><table class="table">
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
                <td scope="col">INT</td>
                <td scope="col">STR</td>
                <td scope="col">SPD</td>
                <td scope="col">DUR</td>
                <td scope="col">POW</td>
                <td scope="col">CMB</td>
            </tr>
            </tbody>
        </table></div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-3 offset-1"><h2 class="name">Name</h2><a href="https://placeholder.com"><img src="http://via.placeholder.com/150x150"></a><table class="table">
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
                <td scope="col">INT</td>
                <td scope="col">STR</td>
                <td scope="col">SPD</td>
                <td scope="col">DUR</td>
                <td scope="col">POW</td>
                <td scope="col">CMB</td>
            </tr>
            </tbody>
        </table></div>
        <div class="col-md-3 offset-1"><h2 class="name">Name</h2><a href="https://placeholder.com"><img src="http://via.placeholder.com/150x150"></a><table class="table">
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
                <td scope="col">INT</td>
                <td scope="col">STR</td>
                <td scope="col">SPD</td>
                <td scope="col">DUR</td>
                <td scope="col">POW</td>
                <td scope="col">CMB</td>
            </tr>
            </tbody>
        </table></div>
        <div class="col-md-3 offset-1"><h2 class="name">Name</h2><a href="https://placeholder.com"><img src="http://via.placeholder.com/150x150"></a><table class="table">
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
                <td scope="col">INT</td>
                <td scope="col">STR</td>
                <td scope="col">SPD</td>
                <td scope="col">DUR</td>
                <td scope="col">POW</td>
                <td scope="col">CMB</td>
            </tr>
            </tbody>
        </table></div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-3 offset-1"><h2 class="name">Name</h2><a href="https://placeholder.com"><img src="http://via.placeholder.com/150x150"></a><table class="table">
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
                <td scope="col">INT</td>
                <td scope="col">STR</td>
                <td scope="col">SPD</td>
                <td scope="col">DUR</td>
                <td scope="col">POW</td>
                <td scope="col">CMB</td>
            </tr>
            </tbody>
        </table></div>
        <div class="col-md-3 offset-1"><h2 class="name">Name</h2><a href="https://placeholder.com"><img src="http://via.placeholder.com/150x150"></a><table class="table">
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
                <td scope="col">INT</td>
                <td scope="col">STR</td>
                <td scope="col">SPD</td>
                <td scope="col">DUR</td>
                <td scope="col">POW</td>
                <td scope="col">CMB</td>
            </tr>
            </tbody>
        </table></div>
        <div class="col-md-3 offset-1"><h2 class="name">Name</h2><a href="https://placeholder.com"><img src="http://via.placeholder.com/150x150"></a><table class="table">
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
                <td scope="col">INT</td>
                <td scope="col">STR</td>
                <td scope="col">SPD</td>
                <td scope="col">DUR</td>
                <td scope="col">POW</td>
                <td scope="col">CMB</td>
            </tr>
            </tbody>
        </table></div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-3 offset-1"><h2 class="name">Name</h2><a href="https://placeholder.com"><img src="http://via.placeholder.com/150x150"></a><table class="table">
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
                <td scope="col">INT</td>
                <td scope="col">STR</td>
                <td scope="col">SPD</td>
                <td scope="col">DUR</td>
                <td scope="col">POW</td>
                <td scope="col">CMB</td>
            </tr>
            </tbody>
        </table></div>
        <div class="col-md-3 offset-1"><h2 class="name">Name</h2><a href="https://placeholder.com"><img src="http://via.placeholder.com/150x150"></a><table class="table">
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
                <td scope="col">INT</td>
                <td scope="col">STR</td>
                <td scope="col">SPD</td>
                <td scope="col">DUR</td>
                <td scope="col">POW</td>
                <td scope="col">CMB</td>
            </tr>
            </tbody>
        </table></div>
        <div class="col-md-3 offset-1"><h2 class="name">Name</h2><a href="https://placeholder.com"><img src="http://via.placeholder.com/150x150"></a><table class="table">
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
                <td scope="col">INT</td>
                <td scope="col">STR</td>
                <td scope="col">SPD</td>
                <td scope="col">DUR</td>
                <td scope="col">POW</td>
                <td scope="col">CMB</td>
            </tr>
            </tbody>
        </table></div>
    </div>
</div>-->
</body>
</html>