<?php

namespace App;

interface Notification{
    public function send(string $text);
}