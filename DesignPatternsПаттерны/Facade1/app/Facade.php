<?php

namespace App;

use App\vendor\Subsystem1Instagram;
use App\vendor\Subsystem2VK;

class Facade{
    protected $vk;
    protected $inst;

    public function __construct(Subsystem1Instagram $i=null,Subsystem2VK $v=null)
    {
        $this->vk=$v;
        $this->inst=$i;        
    }  

    public function loginVK($login)
    {
        $this->vk->login($login);
    }  
    public function showfriendsVK()
    {
        $this->vk->showfriends();
    }
    public function initializedInst(){
        $this->inst->initialized();
    }
     
    public function showposts($date){
        $this->inst->showposts($date);
    }     
}