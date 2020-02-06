<?php

echo "Введите дату рождения в формате \"день месяц год\" через пробел \n";
$dateBornin = trim(fgets(STDIN));


$format = 'd m Y H:i:s';


$currentDateTime = date($format);
$rawBorn = $dateBornin .' 00:00:00';
 
$rawBorn = \DateTime::createFromFormat($format,$rawBorn);
$currentDateTime = \DateTime::createFromFormat($format ,$currentDateTime);

/*
echo $currentDateTime->format($format);
echo "<br>";
echo $rawBorn->format($format); 
echo "<br>";
*/


$diff =  $rawBorn->diff($currentDateTime)->format('Вам сейчас %Y лет, %m месяцев, %d дней и %H:%i:%s (Всего %a)');
echo $diff;

