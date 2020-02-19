<?php

require_once __DIR__ . '../vendor/autoload.php';

$editor = new \App\Editor();


$editor->type("First word.");
$editor->type("Second word.");

$saved = $editor->save(); 
echo $editor->getContent(); 

echo "<br>";
$editor->type("Third word.");
$editor->type("Four word.");

echo $editor->getContent(); 
 
$editor->restore($saved); 

echo "<br>";
echo $editor->getContent(); 

