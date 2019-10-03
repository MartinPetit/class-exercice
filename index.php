<?php

require_once "vehicules.php";
require_once "voitures.php";
require_once "moto.php";
require_once "camion.php";

$voitures1 = new Voitures();
echo $voitures1->getPassagers();
$voitures1->monter(3);
echo $voitures1->getPassagers();

$c4 = new Voitures();
$c4->monter(5);
$c4->descendre(2);
echo $c4->getPassagers();

$urus = new Voitures();




?>
