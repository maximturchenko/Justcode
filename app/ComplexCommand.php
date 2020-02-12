<?php

namespace App;
 
  
class ComplexCommand{  
    protected $receiver;
    private $a;
    private $b;

    public function __constuct(Receiver $r, string $a, string $b){
        $this->receiver=$r;
        $this->a=$a;
        $this->b=$b;
    } 
    public function execute(){
        $this->receiver->dosomething($this->a);
        $this->receiver->dosomethingElse($this->b);
    }
}