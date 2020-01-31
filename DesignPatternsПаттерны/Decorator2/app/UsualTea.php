<?php

namespace Tea\app;

class UsualTea implements TeaInterface{
    private $name;
    public function getPrice(){
        return 15;
    }
    public function getDescription(string $name){
        $this->$name=$name;
        $messageforyou="Уважаемый ".$this->$name." для вас мы приготвили, ";
        return  $messageforyou."простой чай";
    }
}