<?php

namespace Tea\app;

interface TeaInterface{
    public function getPrice();
    public function getDescription(string $name);
}