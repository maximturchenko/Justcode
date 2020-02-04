<?php

namespace App\door;

class MetallicDoorFactory{  
  public function makeDoor($width,$height){
    return new MetallicDoor($width,$height);
  } 
}
