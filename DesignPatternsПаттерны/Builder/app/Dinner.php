<?php

namespace App;

class Dinner{
    public $salad;
    public $soup;
    public $dessert;
  
    public function __construct(ComplexDinner $dinner){
        $this->salad = $dinner->salad;
        $this->soup = $dinner->soup;
        $this->dessert = $dinner->dessert;

        echo "Ваш заказ: ".$this->salad. $this->soup . $this->dessert. " Приятного аппетита!<br>";        
    }   
}