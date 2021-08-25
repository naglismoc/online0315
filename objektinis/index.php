<?php
include("./Plant.php");
include("./Math.php");


// echo Math::sum(4,12);
// echo Math::volume(4);
echo Math::extraordanary(4);

echo "<br>";


// $apple = new Plant("Apple");
// echo $apple->get_name();

$banana = new Plant("banana",'yellow');
$strawberrie = new Plant("strawberrie",'red');
$banana->canFly = true;

print_r($banana);

$banana->intro();
$strawberrie->intro();




$banana = new Plant();
// print_r($strawberrie);


// echo "<br>";


// $banana->tellMeMore();
// echo "<br>";
// $strawberrie->tellMeMore();

// echo "<br>";
// Plant::tellMeMore();
// echo "<br>";

// $banana->intro();
// echo "<br>";
// $strawberrie->intro();

// // $banana->name = "pear";
// $banana->setName("pear");
// // $banana->color = "pink";
// echo "<br>";
// print_r($banana);
// echo "<br>";
// echo $banana->getName();




?>