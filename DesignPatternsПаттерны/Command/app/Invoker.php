<?php

namespace App;

class Invoker{   

    private $onStart;
    private $onFinish;
 
    public function setonStart(CommandInterface $c){
        $this->onStart = $c;
    }
    public function setonFinish(CommandInterface $c){ 
        $this->onFinish = $c;
    }

    public function doSomethingImportant(){ 
        if($this->onStart instanceof CommandInterface){
            $this->onStart->execute();
        }
        if($this->onFinish instanceof CommandInterface){
            $this->onFinish->execute();
        }
    }
}