<?php

require_once __DIR__ . '../vendor/autoload.php';
 
$receiver = new \App\Receiver(); 

$simplecommand = new \App\SimpleCommand("Wathing");
$complexcommand = new \App\ComplexCommand($receiver,"dance","twerk"); 

$invoker = new \App\Invoker();



$invoker->setonStart($complexcommand);
$invoker->setonFinish($complexcommand);  
$invoker->setonStart($simplecommand);


