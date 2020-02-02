<?php
namespace App\Factorymethod;

class LinkCreator extends Abstractgetcreator{
    private $login, $password;

    public function __construct($login,$password){
        $this->login=$login;
        $this->password=$login;
    }
    public function getSocialnetwork(){
        return new ConcreteLinkid($this->login,$this->password);
    }
}
