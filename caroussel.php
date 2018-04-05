<?php
require 'data.php';
session_start();
if (isset($_GET['id_user_char'])) {
    $_SESSION['mainCharacter'] = $_GET['id_user_char'];
}


?>


<! DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style3.css"/>
</head>
<body>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner lulu">
        <div class="carousel-item active">
            <img class="d-block w-100" src="https://i.imgur.com/oTTmkLF.jpg?1" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <p class="sloganCaroussel">6:30 Notre héro se reveille, il doit rapidement se mettre en route pour rejoindre la Wild Code School, dernier endroit sûr sur cette planète, avant la nuit.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://i.imgur.com/Hufpqro.jpg?1" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <p class="sloganCaroussel">Le chemin s'annonce dangereux depuis que les JS dominent le monde.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://i.imgur.com/yW5uWpL.jpg?1" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Tu n'es pas sûr de chemin à prendre, tu pars a la recherche d'une carte.</a>
                <a href="#" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Tu as le sens de l'orientation, direction tout droit.</a>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

</body>
</html>