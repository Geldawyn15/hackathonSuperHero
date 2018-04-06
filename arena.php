<?php

session_start();
require 'data.php';
require 'class.php';
//require 'test.php';

$charaPlayer = intval($_SESSION['mainCharacter']);

session_start();

if ($_SERVER['REQUEST_METHOD'] == "GET" ){
   $_SESSION = [];
    $_SESSION['turn'] = 0;

}


require 'test.php';


if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['Attack'])){

    $turn = $_SESSION['turn'];
    if ($turn == 0){
        $attacker = $testChar;
        $target = $enemy;
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
            }
            $_SESSION['enemyHealthCurrent'] = $target->currentHealth;
        }

    }
    if ($turn == 1){
        $attacker = $enemy;
        $target = $testChar;
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
                                <?php if (isset($_SESSION['userHealthCurrent'])) {
                                    echo $_SESSION['userHealthCurrent'];
                                }else{
                                    echo $testChar->health;
                                }
                                ?>
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
        <div class="col-md-1 offset-3">
            <div>
                <form action="" method="post">
                <input type="submit" class="btn " value="Attack" name="Attack">
                </form>
            </div>
        </div>
        <div class="col-md-4 offset-2">
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
                                <?php  if (isset ($_SESSION['enemyHealthCurrent'])){
                                    echo $_SESSION['enemyHealthCurrent'];
                                } else {
                                    echo $enemy->health;
                                } ;?>
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
            <a href="tableauStat.html" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Statistique.</a>
        </div>
    </div>
</div>



</body>

</html>