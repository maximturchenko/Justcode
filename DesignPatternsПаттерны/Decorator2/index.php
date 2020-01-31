<?php

require_once __DIR__ . "\app\TeaInterface.php";
require_once __DIR__ . "\app\Blacktea.php";
require_once __DIR__ . "\app\Greentea.php";
require_once __DIR__ . "\app\TeachinaPuaer.php";
require_once __DIR__ . "\app\Teawithlimon.php";
require_once __DIR__ . "\app\Teawithmilk.php";
require_once __DIR__ . "\app\UsualTea.php";

use Tea\app;

$usualtea = new \Tea\app\UsualTea();
$blacktea = new \Tea\app\Blacktea($usualtea);
$greentea = new \Tea\app\Greentea($blacktea);
$teachinaPuaer = new \Tea\app\TeachinaPuaer($greentea);
$teawithlimon = new \Tea\app\Teawithlimon($teachinaPuaer);
$alotoftea = new \Tea\app\Teawithmilk($teawithlimon);

     
echo $alotoftea->getDescription("Игнат");
echo "<br>";
echo $alotoftea->getPrice();

 






