<?php

require __DIR__ . '/../app/AclInterface.php';
require __DIR__ . '/../app/AclIp.php';
require __DIR__ . '/../app/AclUser.php';
require __DIR__ . '/../app/Ip.php';
require __DIR__ . '/../app/Reportcontroller.php';
require __DIR__ . '/../app/User.php';

$user = new \App\User();
$acl = new \App\AclUser($user);
$reportConstroller = new \App\Reportcontroller($acl);


$user->setUser('admin');
if($reportConstroller->preExecute()){
    $reportConstroller->indexShow();
}



