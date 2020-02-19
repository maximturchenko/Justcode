<?php

require_once __DIR__ . '../vendor/autoload.php';

$stationList = new \App\StationList();

$stationList->addStation(new \App\RadioStation(103.2));
$stationList->addStation(new \App\RadioStation(43.2));
$stationList->addStation(new \App\RadioStation(96.3));
$stationList->addStation(new \App\RadioStation(394.1));
$stationList->addStation(new \App\RadioStation(231.7));
$stationList->addStation(new \App\RadioStation(54.9));
$stationList->addStation(new \App\RadioStation(76.43));
$stationList->addStation(new \App\RadioStation(89.6));
 
foreach($stationList as $station){
    echo $station->getFrequency()."<br>";
}
 
echo "<br>";
echo $stationList->rewind();

echo "<br>";
echo $stationList->current()->getFrequency();

echo "<br>";
echo $stationList->next();
echo $stationList->next();
echo $stationList->next();
echo $stationList->next();
echo $stationList->next();
echo $stationList->next();
echo $stationList->next(); 



echo "<br>";
echo $stationList->current()->getFrequency();

