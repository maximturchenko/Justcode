<?php

namespace Tea\app;

class TeachinaPuaer implements TeaInterface{
    private $tea;
    public function __construct(TeaInterface $tea){
        $this->tea=$tea;
    }
    public function getPrice(){
        return $this->tea->getPrice() + 200;
    }
    public function getDescription(string $name){
        return $this->tea->getDescription($name) . ", пуэр китайский чай";
    }
}