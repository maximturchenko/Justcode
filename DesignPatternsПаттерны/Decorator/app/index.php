<?php

require __DIR__.'/../app/RepositoryInterface.php'; 
require __DIR__.'/../app/Repository.php'; 
require __DIR__.'/../app/CacheDriver.php'; 
require __DIR__.'/../app/Component.php'; 
require __DIR__.'/../app/RepositoryCacheDecorator.php'; 

$id=1; 

$cache = new \App\CacheDriver();
$repository = new \App\Repository();

$RepositoryCacheDecorator = new \App\RepositoryCacheDecorator($repository,$cache);

$component = new \App\Component($RepositoryCacheDecorator);
$component->render($id);