<?php
require "animal.php";
require "Ape.php";
require "Frog.php";

$sheep = new Animal("shaun");
echo $sheep->name; // "shaun"
echo "<br>";
echo $sheep->legs; // 2
echo "<br>";
var_dump($sheep->cold_blood); // false

echo "<br>";
echo "<br>";
// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded()

//APE
$sungokong = new Ape("Kera Sakti");
echo $sungokong->name;
echo "<br>";
$sungokong->yell(); //"Auooo"

echo "<br>";

//FROG
$kodok = new Frog("buduk");
echo $kodok->name;
echo "<br>";
$kodok->jump(); // "hop hop"

echo "<br>";
