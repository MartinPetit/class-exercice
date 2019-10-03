<?php

require_once "vehicules.php";
require_once "voitures.php";
require_once "moto.php";
require_once "camion.php";

$bmWx6 = new Voitures();
$bmWx6->monter(3);
echo " Il y a " .$bmWx6->getPassagers(). " passagers dans ce bmW x6<br/><br/>";

$c4 = new Voitures();
$c4->monter(5);
$c4->descendre(2);
echo " Il y a " .$c4->getPassagers(). " passagers dans ce c4<br/><br/>";

$urus = new Voitures();
$urus->parcourir(2);
echo "Le urus a fait " .$urus->getnbKms(). " kms<br/><br/>";

$urus->monter(3);
echo " Il y a " .$urus->getPassagers(). " passagers dans le urus<br/><br/>";

$z1000 = new moto();
$z1000->monter(1);
$z1000->parcourir(4);
echo " Il y a " .$z1000->getPassagers(). " passagers dans cette moto et ils ont parcouru " .$z1000->getnbKms(). " kms<br/><br/>";

$camion = new camion();
$camion->monter(2);
$camion->parcourir(6);
echo " Il y a " .$camion->getPassagers(). " passagers dans ce camion et ils ont parcouru " .$camion->getnbKms(). " kms<br/><br/>";






?>
