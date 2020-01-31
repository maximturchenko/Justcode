<?php

 
require __DIR__ . "/app/DressmanInterface.php";
require __DIR__ . "/app/DressmanBase.php";
require __DIR__ . "/app/DressmanAdditional.php";
require __DIR__ . "/app/DressmanSocks.php";
require __DIR__ . "/app/DressmanMittens.php";
require __DIR__ . "/app/DressmanHat.php";



$name='Василий';



$base = new \AppDecorator\DressmanBase();
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





/*New*/
$new = new \AppDecorator\DressmanBase();
$hat = new \AppDecorator\DressmanHat($new);
$mittens = new \AppDecorator\DressmanMittens($hat);
$Socks = new \AppDecorator\DressmanSocks($mittens);

echo $Socks->dress($name);
 






