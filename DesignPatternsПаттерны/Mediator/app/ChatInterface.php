<?php 

namespace App;

interface ChatInterface{
    public function showMessage(User $user,$message);
}