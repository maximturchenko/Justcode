<?php

require_once __DIR__ . '../vendor/autoload.php';

$sheepOlga = new \App\Sheep('Ольга');

$sheepBoris = clone $sheepOlga;
$sheepBoris->setName('Борис'); 

echo $sheepOlga->getName(); 
echo $sheepBoris->getName(); 