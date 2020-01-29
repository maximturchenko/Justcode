<?php

namespace App;

class RepositoryCacheDecorator implements RepositoryInterface{
    private $repository;

    public function __construct(RepositoryInterface $repository,CacheDriver $cachedriver){
        $this->repository=$repository;
        $this->cachedriver=$cachedriver;
    }

    public function getBook(int $id){       
        if($this->cachedriver->hasByid($id)){
            return $this->cachedriver->getByid($id);
        }
        $date=$this->repository->getBook($id);
        $this->cachedriver->setByid($id,$date);
        return $this->cachedriver->getByid($id);
    }
}