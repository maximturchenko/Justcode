<?php   

namespace App\Validators;

use App\Order;

class DefaultValidator implements InterfaceValidator{
    public function isValid(Order $order){
        return $order->getPrice() > 1000;
    }
}
