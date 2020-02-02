<?php
namespace App\Factorymethod;

class FacebookCreator extends Abstractgetcreator{
    private $login, $password;

    public function __construct($login,$password){
        $this->login=$login;
        $this->password=$login;
    }
    public function getSocialnetwork(){
        return new ConcreteFacebook($this->login,$this->password);
    }
}
