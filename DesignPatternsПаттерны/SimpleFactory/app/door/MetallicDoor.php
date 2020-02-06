<?php

namespace App\door;

class MetallicDoor implements DoorInterface{
    protected $width;
    protected $height;

    public function __construct($width,$height){
        $this->width=$width;
        $this->height=$height;
        echo "Новая металлическая дверь с размерами: ".$this->width."cm & ".$this->height."cm создана.";
    }
    public function getWidth(){
        return $this->width;
    }
    public function getHeight(){
        return $this->width;
    }
}
