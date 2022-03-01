<?php

class Collection {
    protected $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function sum($key){
       return array_sum(array_map(function ($item) use ($key){
            return $item->$key;
        }, $this->items));
    }
}

class Video{
    public $title;
    public $length;
     
    public function __construct($title, $length)
    {
        $this->title = $title;
        $this->length = $length;
    }
    
}

$collection = new Collection([
    new Video('Jaws', 100),
    new Video('Jaws 2', 200),
    new Video('Jaws 3', 250)
]);

echo $collection->sum('length');