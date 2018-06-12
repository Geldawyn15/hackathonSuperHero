<?php
require 'data.php';
require 'class.php';
$charaPlayer = intval($_SESSION['mainCharacter']);
$mainPlayer = new Heroes($realData[$charaPlayer]);