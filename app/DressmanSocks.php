<?php
  
namespace AppDecorator; 

class DressmanSocks extends DressmanAdditional{   
  
    public function dress(string $name){ 
        $text=parent::dress($name).": носки натянул";
        return $text; 
    }  
}
