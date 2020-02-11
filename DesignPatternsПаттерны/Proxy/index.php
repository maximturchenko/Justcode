<?php

require_once __DIR__ . '../vendor/autoload.php';

echo "Введите ссылку на скачивание \n";
$url = trim(fgets(STDIN));

$simpledown = new \App\SimpleDownlouder();
$simpledown->downloud($url); 


$proxy = new \App\CacheDownlouder($simpledown);
$proxy->downloud($url); 
