<?php

namespace App;

interface ComplexDinner{
    public function addSalad(int $v);
    public function addSoup(int $v);
    public function addDessert(int $v);
    public function take();
}