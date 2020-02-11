<?php 

namespace App\vendor;

class Subsystem2VK{
    private $friends = [
        'Oleg Gazmanov',
        'Leonardo Di Caprio',
        'Monika Be luchi'
    ];
    public function login($login)
    {
        echo 'Вы с логином'.$login.' успешно запустились!';
    }
    public function showfriends()
    {
        echo 'Ваш список друзей: <br>';
        foreach($this->friends as $i){
            echo $i.'<br>';
        }
    }
}