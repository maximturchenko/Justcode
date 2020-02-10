<?php

namespace App;

class Welder implements Worker{
    public function getDescription(){
        echo 'Я сварщик, работаю с металлическими дверями';
    }
}