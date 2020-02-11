<?php

namespace App;

use App\theme\Theme;

class  Contacts implements WebPage{

    protected $theme;
    public function __construct(Theme $theme){
        $this->theme=$theme;
    }

    public function getDescribtion(){
        echo 'Страница контактов в'.$this->theme->getColor().' теме';
    } 
}
