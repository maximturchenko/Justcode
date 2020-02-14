<?php

namespace App;
   
class ComplexCommand implements CommandInterface{  
    private $receiver;
    private $a;
    private $b;

    public function __construct(Receiver $receiver, string $a,string $b){
        $this->receiver = $receiver;
        $this->a = $a;
        $this->b = $b;
    } 
    public function execute(){
        $this->receiver->dosomething($this->a);
       $this->receiver->dosomethingElse($this->b);
    }
}