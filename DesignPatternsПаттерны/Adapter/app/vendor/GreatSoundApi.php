<?php

namespace App\vendor;

class GreatSoundApi{
    private $login;
    private $pass;

    public function login($login,$pass){
        $this->login=$login;  
        $this->pass=$pass;  
        echo 'Успешный вход в GreatSound!';           
    }
    public function sendNotification($text,$favoritetrack){
       echo 'Уведовление'.$text.' на GreatSoundApi отправлено.Напоминаем ваш любимый трек'.$favoritetrack;
    }
}