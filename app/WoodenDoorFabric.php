<?php

namespace App;
 
class WoodenDoorFabric implements DoorFabric{
    public function makeDoor(){
        return new WoodenDoor();
    }
    public function makeFittingExpert(){
        return new Carpenter();
    }
}