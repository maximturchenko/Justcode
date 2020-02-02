<?php
namespace App\Factorymethod;

class ConcreteFacebook implements interfaceSocial{
    private $login, $password;

    public function __construct($login,$password){
        $this->login=$login;
        $this->password=$login;
    }

   public function login(){
        echo "Facebook for ".$this->login." is in <br>";
    } 
    public function createPost($content){
        echo "New post in facebook is created with content ".$content."<br>";
    }
    public function logout(){
        echo "Facebook is logout <br>";
    }
}
