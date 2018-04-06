<?php
//include "combat.php";
require 'test.php';

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
    $healthCurrent = $target->health;
}


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="arena.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<h1 class="arena">Bienvenue dans l'arène</h1>
<div class="container">
    <div class="row">
        <div class="col-md-5 offset-1">
            <div class="card" style="width: 18rem;">
                <p class="name">martin</p>
                <img class="card-img-top" src= "<?php echo $testChar->image; ?>" alt= "Card image cap">
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Vie en cour</th>
                            <th scope="col">Vie total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td scope="col">
                                <?php echo $testChar->currentHealth;?>
                            </td>
                            <td scope="col">
                                <?php echo $testChar->health;?>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-5 offset-1">
            <div class="card" style="width: 18rem;">
                <p class="name">martin</p>
                <img class="card-img-top" src="<?php echo $enemy->image; ?>" alt="Card image cap">
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Vie en cour</th>
                            <th scope="col">Vie total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td scope="col">
                                <?php echo $target->health;?>
                            </td>
                            <td scope="col">
                                <?php echo $enemy->health;?>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-7 offset-5">
            <a href="tableauStat2.html" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Statistique.</a>
        </div>
    </div>
</div>


</body>

</html>