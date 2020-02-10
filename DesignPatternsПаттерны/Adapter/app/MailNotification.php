<?php

namespace App;

class MailNotification implements Notification{
   private $login;
   private $email;
     
    public function login($login,$email){
        $this->login=$login;  
        $this->email=$email;      
    }
    public function send($text){
        echo 'Уведомление '.$text.' будет доставлено на почту:'.$this->email.' !';
    }
}