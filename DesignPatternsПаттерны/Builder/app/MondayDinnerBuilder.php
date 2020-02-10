<?php

namespace App;

class MondayDinnerBuilder implements ComplexDinner{
    public $saladv = ['Оливье','Позитив'];
    public $salad;
    public $soupv = ['Рассольник','Суп с лапшой'];
    public $soup;
    public $dessertv = ['Брусничный торт','Фенчейдайзер'];
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