<?php

 

require_once __DIR__ . "\app\interfaceSocial.php";
require_once __DIR__ . "\app\Abstractgetcreator.php";
require_once __DIR__ . "\app\FacebookCreator.php";
require_once __DIR__ . "\app\ConcreteFacebook.php";
require_once __DIR__ . "\app\VkCreator.php";
require_once __DIR__ . "\app\ConcreteVk.php";
require_once __DIR__ . "\app\LinkCreator.php";
require_once __DIR__ . "\app\ConcreteLinkid.php";
 
  
use App\Factorymethod;

$network = new App\Factorymethod\FacebookCreator("maximturchenko","12345");
$network->post("My new post guys in Facebook, nice to see you");
 
$network = new App\Factorymethod\LinkCreator("maximturchenko","12345");
$network->post("My new post guys in Facebook, nice to see you");

$network = new App\Factorymethod\VkCreator("maximturchenko","12345");
$network->post("Мой новый пост в ВК");
 









