<?php

class Collection {
    protected $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function sum($key){
       return array_sum(array_column($this->items, $key));
    }
}

class VideosCollection extends Collection{
    public function length(){
        return $this->sum('length');
    }
}

class Video  {
    public $title;
    public $length;
     
    public function __construct($title, $length)
    {
        $this->title = $title;
        $this->length = $length;
    }
    
}

$videos = new VideosCollection([
    new Video('Jaws', 100),
    new Video('Jaws 2', 200),
    new Video('Jaws 3', 250)
]);

echo $videos->length();