<?php

namespace App;

class AclUser implements AclInterface{
    private $user;
    public function __construct(User $user){
        $this->user=$user;
    }
    public function isAllow(){
        switch($this->user->getUser()){
            case User::TYPE_ADMIN:
                return true;            
            case User::TYPE_financer:
                return true;
        }           
        return false;        
    }
}