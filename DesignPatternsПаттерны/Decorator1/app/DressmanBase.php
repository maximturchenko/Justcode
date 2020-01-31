<?php


namespace AppDecorator;   
 

class DressmanBase implements DressmanInterface{
    protected $name;
    public function dress($name){
        $this->name=$name;
        $text = $this->name." одет сейчас в :";
        return $text;   
    }    
}
