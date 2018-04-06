<?php


require 'data.php';
require 'class.php';


//require 'test.php';

$charaPlayer = intval($_SESSION['mainCharacter']);

$mainPlayer = new Heroes($realData[$charaPlayer]);
$enemy1 = new Heroes ($realData[$_SESSION['enemy1']['id']]);

$looser='';



if ($_SERVER['REQUEST_METHOD'] == "GET" ){
    unset($_SESSION['enemyHealthCurrent']);
    unset($_SESSION['userHealthCurrent']);

    $_SESSION['turn'] = 0;

}


if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['Attack'])){

    $turn = $_SESSION['turn'];
    if ($turn == 0){
        $attacker = $mainPlayer;
        $target = $enemy1;
        $turn++;
        $_SESSION['turn'] = $turn;
        if (isset($_SESSION['enemyHealthCurrent'])){
            $target->currentHealth = $_SESSION['enemyHealthCurrent'];
        }
        $dodge = $target->dodge($target);
        if ($dodge == 0) {
            $target->currentHealth = $target->currentHealth - $attacker->attack;
            if ($target->currentHealth <= 0){
                $target->currentHealth = 0;
                header('Location: tableauStat.php?player=enemy');
            }
            $_SESSION['enemyHealthCurrent'] = $target->currentHealth;
        }

    }
    if ($turn == 1){
        $attacker = $enemy1;
        $target = $mainPlayer;
        $turn--;
        $_SESSION['turn'] = $turn;
        if (isset($_SESSION['userHealthCurrent'])){
            $target->currentHealth = $_SESSION['userHealthCurrent'];
        }
        $dodge = $target->dodge($target);
        if ($dodge == 0) {
            $target->currentHealth = $target->currentHealth - $attacker->attack;
            if ($target->currentHealth <= 0){
                $target->currentHealth = 0;
                header('Location: tableauStat.php?player=player');
            }
            $_SESSION['userHealthCurrent'] = $target->currentHealth;

        }
    }

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
        <div class="col-md-2">
            <div class="card" style="width: 18rem;">
                <p class="name"><?= $mainPlayer->name ?></p>
                <img class="card-img-top" src= "<?php echo $mainPlayer->image; ?>" alt= "Card image cap">
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Vie en cours</th>
                            <th scope="col">Vie totale</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td scope="col">
                                <?php if (isset($_SESSION['userHealthCurrent'])) {
                                    echo $_SESSION['userHealthCurrent'];
                                }else{
                                    echo $mainPlayer->health;
                                }
                                ?>
                            </td>
                            <td scope="col">
                                <?php echo $mainPlayer->health;?>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-1 offset-3">
            <div>
                <form action="" method="post">
                <input type="submit" class="btn " value="Attack" name="Attack">
                </form>
            </div>
        </div>
        <div class="col-md-4 offset-2">
            <div class="card" style="width: 18rem;">
                <p class="name"><?= $enemy1->name ?></p>
                <img class="card-img-top" src="<?php echo $enemy1->image; ?>" alt="Card image cap">
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Vie en cours</th>
                            <th scope="col">Vie totale</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td scope="col">
                                <?php  if (isset ($_SESSION['enemyHealthCurrent'])){
                                    echo $_SESSION['enemyHealthCurrent'];
                                } else {
                                    echo $enemy1->health;
                                } ;?>
                            </td>
                            <td scope="col">
                                <?php echo $enemy1->health;?>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

</html>