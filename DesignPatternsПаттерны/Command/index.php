<?php

require_once __DIR__ . '../vendor/autoload.php';
 
$receiver = new \App\Receiver(); 

$simplecommand = new \App\SimpleCommand("Waiting"); 
$complexcommand = new \App\ComplexCommand($receiver,"dance","sing song"); 

$invoker = new \App\Invoker(); 


$invoker->setonStart($simplecommand); 
$invoker->setonFinish($complexcommand); 
 
$invoker->doSomethingImportant();