<?php

require_once __DIR__ . '../vendor/autoload.php';

$theme = new \App\theme\OrangeTheme();
$newspage =  new \App\News($theme);
$newspage->getDescribtion();