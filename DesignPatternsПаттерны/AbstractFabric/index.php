<?php

require_once __DIR__ . '../vendor/autoload.php';
 
$steel = new \App\SteelDoorFabric();
$steeldoor = $steel->makeDoor();
$steelExpert = $steel->makeFittingExpert();
echo $steeldoor->getDescription();
echo "<br>";
$steelExpert->getDescription();
echo "<br>";

$wooden = new \App\WoodenDoorFabric();
$woodendoor=$wooden->makeDoor();
$woodenExpert=$wooden->makeFittingExpert();
echo $woodendoor->getDescription();
echo "<br>";
$woodenExpert->getDescription();
echo "<br>";