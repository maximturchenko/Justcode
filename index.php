<?php

 
require __DIR__ . "/app/DressmanInterface.php";
require __DIR__ . "/app/DressmanBase.php";
require __DIR__ . "/app/DressmanAdditional.php";
require __DIR__ . "/app/DressmanSocks.php";
require __DIR__ . "/app/DressmanMittens.php";
require __DIR__ . "/app/DressmanHat.php";



$name='Василий';



$base1 = new \AppDecorator\DressmanBase();
echo $base1->dress($name);
echo "<br>";

$base = new \AppDecorator\DressmanAdditional();
echo $base->dress($name);
echo "<br>";


$hat = new \AppDecorator\DressmanHat($base);  
echo $hat->dress($name);
echo "<br>";


$mitten = new \AppDecorator\DressmanMittens($base);  
echo $mitten->dress($name);
echo "<br>";
 
$socks = new \AppDecorator\DressmanSocks($base);  
echo $socks->dress($name);
echo "<br>";








