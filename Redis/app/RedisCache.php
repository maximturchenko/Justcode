<?php

namespace App;
use Predis;

define("DEFAULT_TIL", 1200);

class RedisCache{
    private $redis;
    public function __construct(){
        $this->redis = new Predis\Client();
    }
    public function read($key){
        return $this->redis->get($key); 
    }
    public function write($key,$value){
        $this->redis->set($key,$value);
        return $value;
    }

    public function expire($key,$seconds = DEFAULT_TIL){
       return $this->redis->expire($key , $seconds);
    }
}