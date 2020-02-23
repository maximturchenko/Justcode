<?php
  
require __DIR__ . '/vendor/autoload.php';
  
$rediscache = new \App\RedisCache();

$url = 'hello-world';
$page = $rediscache->read($url);

if(!isset($page)){
    $page = random_int(10 , 100);
    echo $rediscache->write($url, $page);
   echo $rediscache->expire($url , 60);
}
