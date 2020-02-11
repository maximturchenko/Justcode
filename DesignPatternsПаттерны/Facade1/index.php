<?php

require_once __DIR__ . '../vendor/autoload.php';

use \App\vendor\Subsystem1Instagram;
use \App\vendor\Subsystem2VK;

$inst = new Subsystem1Instagram();
$vk = new Subsystem2VK();

$facade = new \App\Facade($inst,$vk);


$facade->loginVK('Maxi');
$facade->showfriendsVK();
$facade->initializedInst();
$facade->showposts('11-02-2020');


 