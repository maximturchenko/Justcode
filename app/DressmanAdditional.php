<?php


namespace AppDecorator;  
 
class DressmanAdditional implements DressmanInterface{     
    protected $people; 

    public function __construct(DressmanInterface $people){    
        $this->people=$people;
    } 

    public function dress(string $name){    
        return $this->people->dress($name); 
    }    
}
