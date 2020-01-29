<?php

namespace App;

class AclIp implements AclInterface{
    private $ip;
    public function __construct(string $ip){
        $this->ip=$ip;
    }
    public function isAllow(){
        return $this->ip == Ip::TYPE_IP_LOCAL;        
    }
}