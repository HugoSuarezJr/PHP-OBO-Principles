<?php

class Coordinates {
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->y = $y;
        $this->x = $x;
    }

    
}

function pin(Coordinates $coordinates){
    $coordinates->x;
}

function distance(Coordinates $begin, Coordinates $end){
    
}

// When data is connected - give it a proper type.