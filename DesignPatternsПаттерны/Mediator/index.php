<?php

require_once __DIR__ . '../vendor/autoload.php';

$simplechat = new \App\SimpleChat();

$ivan = new \App\User("Ivan",$simplechat );
$ignat = new \App\User("Ignat",$simplechat );




$ivan->send("Hello");

$ignat->send("Hi");
$ignat->send("How are you?");

$ivan->send("All is good, what about you?");

