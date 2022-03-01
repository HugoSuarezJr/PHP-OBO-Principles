<?php

class Team {

    protected $name;

    protected $members = [];


    public function __construct($name, $members =[]){
        $this->name = $name;
        $this->members = $members;
    }

    public static function start(...$params){
        return new static(...$params);
    }

    public function name(){
        return $this->name;
    }

    public function members(){
        return $this->members;
    }

    public function add($name){
        $this->members[] = $name;
    }

    public function cancel(){

    }
}


$acme = Team::start('Acme', [
    'Michael Jordan',
    'Carl Barber',
    'Kareem Benzema'
]);

$acme->add('Robert Downey Jr.');

var_dump($acme->members());