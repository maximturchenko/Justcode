<?php

namespace App;

class Editor{
    protected $content = '';

     
    public function getContent(){
        return $this->content;
    }
    public function type(string $words){
        $this->content=$this->content." ".$words;
    }

    public function save(){
        return new EditorMemento($this->content);
    }
    public function restore(EditorMemento $ed){
        $this->content = $ed->getContent();
    }
} 