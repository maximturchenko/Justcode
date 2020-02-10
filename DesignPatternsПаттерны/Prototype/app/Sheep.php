<?php

namespace App;

class Sheep{
    protected $name;
    protected $category;

    public function __construct(string $name,string $category='Горная')
    {
        $this->name=$name;
        $this->category=$category;
    }

    public function getName(){
        return $this->name;
    }
    public function setName(string $n){
        $this->name=$n;
    }
    public function getCategory(){
        return $this->category;
    }
    public function setCategory(string $c){
        $this->category=$c;
    }

}