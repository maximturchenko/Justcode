<?php

namespace Tea\app;

class Teawithmilk implements TeaInterface{
    private $tea;
    public function __construct(TeaInterface $tea){
        $this->tea=$tea;
    }
    public function getPrice(){
        return $this->tea->getPrice() + 45;
    }
    public function getDescription(string $name){
        return $this->tea->getDescription($name) . ", с молоком";
    }
}