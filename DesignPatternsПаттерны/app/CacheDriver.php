<?php
namespace App;

class CacheDriver{
    private $cache=[]; 
    public function getByid(int $id)
    {
        if(isset($this->cache[$id])){
            return $this->cache[$id];
        } 
       return null;
    }
    public function setByid(int $id,string $value)
    {
        $this->cache[$id]=$value;
        return true;
    }
    public function hasByid(int $id)
    {
        if(isset($cache[$id])){
            return true;
        } 
        return false;
    }
}