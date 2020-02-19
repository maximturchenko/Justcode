<?php

namespace App;
 

class RadioStation{
    private $frequency;

    public function __construct(float $frequency)
    {
        $this->frequency=$frequency;
    }
    public function getFrequency()
    {
        return $this->frequency;
    }
    
}
