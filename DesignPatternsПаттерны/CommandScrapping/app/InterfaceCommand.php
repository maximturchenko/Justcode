<?php 

namespace App;

interface InterfaceCommand{
   public function execute();
   public function getId();
   public function getStatus();
}