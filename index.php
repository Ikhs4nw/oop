<?php
require('animal.php');
require('Frog.php');
require('Ape.php');

$sheep = new Animal("shaun");

echo "Release 0 <br><br>";

echo $sheep->name . "<br>"; // "shaun 
echo $sheep->legs . "<br>";
echo $sheep->cold_blooded . "<br>";

echo "<br> Release 1 <br><br>";

$domba = new Animal("Shaun");
$domba->shaunTheShip();

$kodok = new Frog("buduk");
$kodok->jump();

$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"
?>