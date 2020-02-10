<?php

namespace App;

use App\vendor\GreatSoundApi;

class GreatSoundNotification implements Notification{
   private $login;
   private $pass;
   private $email;
   public $favoritetrack;
   private $greatsound;
     
    public function __construct(GreatSoundApi $gs,$favoritetrack)
    {
        $this->favoritetrack = $favoritetrack;
        $this->greatsound = $gs;
    } 
    public function login($l,$p,$e){       
        $this->login = $l;
        $this->pass = $p;
        $this->email = $e;
    }

    public function send($text){
        $this->greatsound->login($this->login,$this->pass);        
        $this->greatsound->sendNotification($text,$this->favoritetrack);
    }
}