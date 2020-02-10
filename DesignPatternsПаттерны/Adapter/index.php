<?php

require_once __DIR__ . '../vendor/autoload.php';

$mailSend = new \App\MailNotification();
$mailSend->login('maxi','jklsdaj@mail.ru');
$mailSend->send('Hi, how are you?');

$gs = new \App\vendor\GreatSoundApi();
$gsounds = new \App\GreatSoundNotification($gs,'Маx Barskih - Berega');
$gsounds->login('maxi','12345','jklsdaj@mail.ru');
$gsounds->send('Excuse me, how are you?');
