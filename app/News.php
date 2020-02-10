<?php

namespace App;

use App\theme\Theme;

class  News implements WebPage{

    protected $theme;
    public function __construct(Theme $theme){
        $this->theme=$theme;
    }

    public function getDescribtion(){
        echo 'Страница c новостями в'.$this->theme->getColor().' теме';
    } 
}
