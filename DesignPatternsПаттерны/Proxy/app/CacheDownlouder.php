<?php

namespace App;

class CacheDownlouder implements DownlouderVideo{ 

    private $downlouder;
    private $cache=[];
    public function __construct(SimpleDownlouder $downl)
    {
        $this->downlouder = $downl;
    }
    public function downloud($url){
        if(!isset($this->cache[$url])){
            echo "CacheProxy MISS. ";
            $result = $this->downlouder->downloud($url);
            $this->cache[$url] = $result;
        }else{
            echo "CacheProxy HIT. Retrieving result from cache.\n";
        }
        return $this->cache[$url];         
    }
}