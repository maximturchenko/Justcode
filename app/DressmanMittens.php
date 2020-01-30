<?php


namespace AppDecorator;  
 
class DressmanMittens extends DressmanAdditional{
  
    public function dress(string $name){ 
        $text=parent::dress($name).": варежки надел";
        return $text; 
    }     
}
