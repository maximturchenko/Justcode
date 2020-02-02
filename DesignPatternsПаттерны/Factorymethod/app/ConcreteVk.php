<?php
namespace App\Factorymethod;

class ConcreteVk implements interfaceSocial{
    private $login, $password;

    public function __construct($login,$password){
        $this->login=$login;
        $this->password=$login;
    }

   public function login(){
        echo "Вы залогинились под логином ".$this->login." <br>";
    } 
    public function createPost($content){
        echo "Ваш пост в Вконтакте:".$content."<br>";
    }
    public function logout(){
        echo "Вы вышли из Вконтакте <br>";
    }
}
