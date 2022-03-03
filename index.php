<?php

// Notes: * 'private' keyword makes property only usable to class
// but 'protected' keyword makes property accessible to both class and children of class.

// Encapsulation => Enclose within a capsule
class TennisMatch{
    protected $playerOne;
    public function score(){
        //is there a winner
        // does someone have an advantage
        // are they in deuce
    }

    public function playerOne(){
        return $this->playerOne;
        // this allows you to access data of object with protected property. 
        // must show caution when doing this "Getter".
    }

    protected function hasWinner(){

    }
    protected function hasAdvantage(){
        
    }
    protected function inDeuce(){
        
    }
}
