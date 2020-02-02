<?php
namespace App\Factorymethod;

abstract class Abstractgetcreator{
    
    abstract public function getSocialnetwork();

    public function post($content){
        $network=$this->getSocialnetwork();
        $network->login();
        $network->createPost($content);
        $network->logout();
    }
}
