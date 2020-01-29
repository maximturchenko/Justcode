<?php

require __DIR__ . '/../app/Order.php';

require __DIR__ . '/../app/Validators/InterfaceValidator.php';
require __DIR__ . '/../app/Validators/DefaultValidator.php';
require __DIR__ . '/../app/Validators/PremiumValidator.php';


$validator1 = new App\Validators\DefaultValidator();
$validator2 = new App\Validators\PremiumValidator();

$order = new App\Order();
$order->setPrice(700);

$isvalid1 = $validator1->isValid($order);

$order->setPrice(2200);

$isvalid2 = $validator2->isValid($order);


print_r($isvalid1);
print_r($isvalid2);