<?php
namespace App\Factorymethod;

class VkCreator extends Abstractgetcreator{
    private $login, $password;

    public function __construct($login,$password){
        $this->login=$login;
        $this->password=$login;
    }
    public function getSocialnetwork(){
        return new ConcreteVk($this->login,$this->password);
    }
}
