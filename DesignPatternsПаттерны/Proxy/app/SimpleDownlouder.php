<?php

namespace App;

class SimpleDownlouder implements DownlouderVideo{ 

    public function downloud(string $url){
        echo "Downloading a file from the Internet.\n";
        $result=file_get_contents($url);
        echo "Downloaded bytes:" .strlen($result)."\n";
        return $result;        
    }
}