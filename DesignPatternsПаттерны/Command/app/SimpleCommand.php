<?php

namespace App;

class SimpleCommand implements CommandInterface{
    private $b;

    public function __construct(string $b){
        $this->b=$b;
    } 

 

    public function execute(){
        echo "I am simple command, can do it: ".$this->b;
    }
}