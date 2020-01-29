<?php   

namespace App\Validators;

use App\Order;

interface InterfaceValidator{
    public function isValid(Order $order);
}
