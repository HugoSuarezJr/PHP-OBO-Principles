<?php

// Avoids primative obsession - and readability
// Helps with consistency
// Immutability

class Age {
    private $age;

    public function __construct($age)
    {
        if($age < 0 || $age > 120){
        throw new InvalidArgumentException('That age dont look right');
    }
        $this->age = $age;
    }

    public function increment(){
        return new self($this->age +1);
    }

    public function get(){
        return $this->age;
    }
}

$age = new Age(36);
$age = $age->increment();
var_dump($age->get());


// function register(string $name, Age $age){
    
//  return [$age, $name];
// }

// $age = new Age(35);

// $age->age = -22;
// var_dump(register("mike", $age));