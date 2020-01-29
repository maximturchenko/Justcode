<?php

namespace App;

class User{
    const TYPE_ADMIN='admin';
    const TYPE_MANAGER='manager';
    const TYPE_financer='financer';

    private $type;

    public function setUser(string $type){
        $this->type = $type;
    }
    public function getUser(){
        return $this->type;
    }
}