<?php

namespace App;

class Director{
    protected static $instance;

    private $age;
    private $name;
    private $lastname;

    private function __construct($a,$n,$l){
        $this->age = $a;
        $this->name = $n;
        $this->lastname = $l;
    } 
    public static function getInstance($a,$n,$l){
        if(!self::$instance){
            self::$instance = new self($a,$n,$l);
         }
         return self::$instance;
    }
    public function __clone(){

    }
    public function __wakeup(){
        
    }
}