<?php

namespace Tea\app;

class Blacktea implements TeaInterface{
    private $tea;
    public function __construct(TeaInterface $tea){
        $this->tea=$tea;
    }
    public function getPrice(){
        return $this->tea->getPrice() + 30;
    }
    public function getDescription(string $name){
        return $this->tea->getDescription($name) . ", чёрный чай";
    }
}