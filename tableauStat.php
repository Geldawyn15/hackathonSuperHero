<?php
require_once 'class.php';
$mainPlayer = new Heroes($realData[$charaPlayer]);
$enemy1 = new Heroes ($realData[$_SESSION['enemy1']['id']]);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="arena.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<h1 class="title">Statistiques du combat</h1>


<div class="container">
    <div class="row">
        <div class="col-md-5 offset-1">
            <div class="card" style="width: 18rem;">
                <p class="name">Vainqueur: martin</p>
                <img class="card-img-top" src="<?= $mainPlayer->image ?>" alt= "Card image cap">
                <p class="vie">Il reste ..... de vie au héro.</p>
            </div>
        </div>
        <div class="col-md-5 offset-1">
            <div class="card" style="width: 18rem;">
                <p class="name">Perdant: martin</p>
                <img class="card-img-top" src="<?= $enemy->image?>" alt= "Card image cap">
                <p class="vie">Le héro a été vaincu.</p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <?php
        if (isset($_GET['player']) && $_GET['player'] == 'enemy' ) {
?>

        <div class="col-md-5 offset-1">
            <a href="perteBadge.html" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">L'aventure continue.</a>
        </div>

<?php }else{ ?>

       <div class="col-md-5 offset-1">
            <a href="gameOver.html" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Game Over.</a>
        </div>

    <?php } ?>
    </div>
</div>
</body>

</html>