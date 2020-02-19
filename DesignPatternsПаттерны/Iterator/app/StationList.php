<?php

namespace App;

use Countable;
use Iterator;

class StationList implements Countable,Iterator{
    protected $stations = [];
    protected $counter;

    public function addStation(RadioStation $station)
    {
        $this->stations[] = $station;
    } 
    public function count(){
        return count($this->stations);
    }
    public function current(){
        return $this->stations[$this->counter];
    }
    public function key(){
        return $this->counter;
    }
    public function next(){
        $this->counter++;
    }
    public function rewind(){
        $this->counter=0;
    }
    public function valid(){
        return isset($this->stations[$this->counter]);
    }    
  
}
