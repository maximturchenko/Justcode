<?php 

namespace App;

abstract class WebScrappingCommand implements InterfaceCommand{
    public $id;
    public $status = 0;
    public $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }   
    public function getId(){
        return $this->id;
    }
    public function getStatus(){
        return $this->status;
    } 
    public function getUrl(){
        return $this->url;
    }
    abstract public  function parse($html);
    public function execute(){
        $html = $this->downloud();
        $this->parse($html);
        $this->complite();
    }
    public function downloud(){
        $html = file_get_contents($this->getUrl());
        echo 'Downlouded is'.$this->url .' done \n';
        return $html;
    }
    public function complite(){
        $this->status = 1;
        echo 'Mission complite';
        //Queue::get()->compliteCommand($this);
    }
}