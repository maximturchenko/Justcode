<?php

require_once __DIR__ . '../vendor/autoload.php';

$varios = new \App\TuesdayDinnerBuilder();
$dinner = $varios->addDessert(0)->addSalad(0)->take();

$varios = new \App\TuesdayDinnerBuilder();
$dinner = $varios->addDessert(0)->addSoup(1)->take();

$varios = new \App\TuesdayDinnerBuilder();
$dinner = $varios->addDessert(1)->take();
  
$varios = new \App\MondayDinnerBuilder();
$dinner = $varios->addDessert(0)->addSalad(0)->take();

$varios = new \App\MondayDinnerBuilder();
$dinner = $varios->addDessert(1)->addSoup(1)->take();

$varios = new \App\MondayDinnerBuilder();
$dinner = $varios->addDessert(1)->take();
 