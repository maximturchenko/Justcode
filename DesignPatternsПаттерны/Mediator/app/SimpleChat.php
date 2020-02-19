<?php 

namespace App;

class SimpleChat implements ChatInterface{  
    public function showMessage(User $user,$message){
        $time = date('d:m:Y H:i');
        $sender = $user->getName();
        echo $time.'['.$sender.']:'.$message.'<br>';
    }
}