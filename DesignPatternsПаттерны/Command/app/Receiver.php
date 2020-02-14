<?php

namespace App;

class Receiver{    
    public function dosomething(string $a){ 
        echo "I am Receiver and i do(dosomething) it: ".$a;
    }
    public function dosomethingElse(string $b){ 
        echo "I am Receiver and i do(dosomethingElse) it: ".$b;
    } 
}