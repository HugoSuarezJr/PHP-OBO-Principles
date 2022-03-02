<?php

// Encapsulation => Enclose within a capsule
class Person {
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    
    public function job(){
        return "Software Engineer";
    }

    public function favoriteTeam(){

    }

    private function problems(){
        return "Going through a divorce";
    }
}

$method = new \ReflectionMethod(Person::class, 'problems');
$method->setAccessible(true);

$person = new Person('Bob');


var_dump($method->invoke($person));
