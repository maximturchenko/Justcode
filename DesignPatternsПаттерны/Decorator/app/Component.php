<?php

namespace App;

class Component{

    private $repository;
    public function __construct(RepositoryInterface $repository){
        $this->repository=$repository;
    }

    public function render(int $id){
        echo $this->repository->getBook($id);
    }
}