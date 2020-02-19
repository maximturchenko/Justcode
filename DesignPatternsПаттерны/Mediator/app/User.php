<?php 

namespace App;

class User{ 
    private $name; 
    private $chat; 
 
    public function __construct($name , ChatInterface $chat)
    {
        $this->name = $name;
        $this->chat = $chat;
    }
    public function getName(){ 
        return $this->name;
    }
    public function send($message){ 
        return  $this->chat->showMessage($this, $message);
    }
}