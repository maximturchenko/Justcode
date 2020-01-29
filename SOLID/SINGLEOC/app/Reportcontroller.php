<?php

namespace App;

class Reportcontroller{
    private $acl;
    public function __construct(AclInterface $acl){
        $this->acl = $acl;
    }
    public function preExecute(){
        return $this->acl->isAllow();
    }
    public function indexShow(){
        echo 'Отчеты показаны';
    }
}