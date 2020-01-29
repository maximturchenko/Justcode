<?php
namespace App;

class Order{
    private $price; 
    
    public function setPrice(int $price)
    {
        $this->price=$price;
    }
    public function getPrice()
    {
        return $this->price;
    }
} 