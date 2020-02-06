<?php

  
require_once __DIR__ . ("/app/door/DoorInterface.php");
require_once __DIR__ . ("/app/door/MetallicDoor.php");
require_once __DIR__ . ("/app/door/WoodenDoor.php");
require_once __DIR__ . ("/app/door/MetallicDoorFactory.php");
require_once __DIR__ . ("/app/door/WoodenDoorFactory.php");

use App\door;

$wodfactory = new \App\door\WoodenDoorFactory();
$metfactory = new \App\door\MetallicDoorFactory();


$wd1=$wodfactory->makeDoor(35,98);
$md1=$metfactory->makeDoor(603,13);


 



