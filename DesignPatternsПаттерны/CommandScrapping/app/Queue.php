<?php 

namespace App;

class Queue{

    private $dbmy;
   
    public function __construct()
    {
        $this->dbmy = mysqli_connect("localhost", "root", "", "queue");
  
        $this->db->query('CREATE TABLE IF NOT EXISTS "commands" (
            "id" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
            "command" TEXT,
            "status" INTEGER
        )');
    } 

    public function get(){

    }
}

//queue