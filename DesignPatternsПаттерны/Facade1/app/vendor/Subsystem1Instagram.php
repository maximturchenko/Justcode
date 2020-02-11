<?php 

namespace App\vendor;

class Subsystem1Instagram{
 
    public function initialized()
    {
        echo 'Инстаграмм успешно запущен!';
    }
    public function showposts($date)
    {
        echo 'Показаны посты за '.$date.' дату';
    }
}