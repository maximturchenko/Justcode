<?php

namespace App;

class SteelDoorFabric implements DoorFabric{
    public function makeDoor(){
        return new SteelDoor();
    }
    public function makeFittingExpert(){
        return new Welder();
    }
}