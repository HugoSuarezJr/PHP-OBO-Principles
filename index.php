<?php

// Value Objects

class Age {
    private $age;

    public function __construct($age)
    {
        if($age < 0 || $age > 120){
        throw new InvalidArgumentException('That age dont look right');
    }
        $this->age = $age;
    }
}

function register(string $name, Age $age){
    
 return [$age, $name];
}

$age = new Age(35);

$age->age = -22;

var_dump(register("mike", $age));