<?php


namespace AppDecorator;  
 
class DressmanHat extends DressmanAdditional{
  
    public function dress(string $name){ 
        $text=parent::dress($name)." шапку натянул";
        return $text; 
    }    
}
