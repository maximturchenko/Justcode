<?php

namespace App;

class Carpenter implements Worker{
    public function getDescription(){
        echo 'Я столяр, работаю с деревянными дверями';
    }
}