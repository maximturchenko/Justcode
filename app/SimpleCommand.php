<?php

namespace App;

class SimpleCommand{
    private $b;

    public function __constuct($b){
        $this->b=$b;
    } 
    public function execute(){
        echo "I am simple command, can do it: ".$this->b;
    }
}