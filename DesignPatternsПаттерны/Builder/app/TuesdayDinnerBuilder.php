<?php

namespace App;

class TuesdayDinnerBuilder implements ComplexDinner{
    public $saladv = ['Салат "Мозаика"','Салат "Аппетитный"'];
    public $salad;
    public $soupv = ['Борщ','Щи'];
    public $soup;
    public $dessertv = ['Тирамису','Наполеон'];
    public $dessert;
  
    public function addSalad($v){
        $this->salad = $this->saladv[$v];
        return $this;
    }
    public function addSoup($v){
        $this->soup = $this->soupv[$v];
        return $this;
    }
    public function addDessert($v){
        $this->dessert = $this->dessertv[$v];
        return $this;
    }
    public function take(){
        return new Dinner($this);
    }
}