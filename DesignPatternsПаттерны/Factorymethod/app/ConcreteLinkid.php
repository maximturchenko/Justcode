<?php
namespace App\Factorymethod;

class ConcreteLinkid implements interfaceSocial{
    private $login, $password;

    public function __construct($login,$password){
        $this->login=$login;
        $this->password=$login;
    }

   public function login(){
        echo "LinkId for ".$this->login." is in <br>";
    } 
    public function createPost($content){
        echo "New post in LinkId is created with content ".$content."<br>";
    }
    public function logout(){
        echo "LinkId is logout <br>";
    }
}
