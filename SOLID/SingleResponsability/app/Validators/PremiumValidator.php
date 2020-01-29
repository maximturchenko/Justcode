<?php   

namespace App\Validators;

use App\Order;

class PremiumValidator implements InterfaceValidator{  
    public function isValid(Order $order){
       return $order->getPrice() > 2000;
    }
}
