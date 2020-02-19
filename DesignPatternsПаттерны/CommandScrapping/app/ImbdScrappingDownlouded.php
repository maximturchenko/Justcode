<?php 

namespace App;

class ImbdScrappingDownlouded extends WebScrappingCommand{

    public function __construct()
    {
        $this->url = "https://www.imdb.com/feature/genre/";
    }

    public function parse($html){
        preg_match_all("|href=\"(https://www.imdb.com/search/title\?genres=.*?)\"|",$html, $matches);
        echo "Downllded ".count($matches[1])." genres";
        foreach ($matches[1] as $genre) {
            //Queue::get()->add(new ImbdPageScrapping($genre));
        } 
        print_r($matches); 
    }

}