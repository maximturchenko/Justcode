<?php

namespace App\door;

class WoodenDoorFactory{  
  public function makeDoor($width,$height){
    return new WoodenDoor($width,$height);
  } 
}
