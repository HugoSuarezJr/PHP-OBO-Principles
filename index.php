<?php

// Notes: * 'private' keyword makes property only usable to class
// but 'protected' keyword makes property accessible to both class and children of class.

// Encapsulation => Enclose within a capsule
class TennisMatch{
    public function score(){
        //is there a winner
        // does someone have an advantage
        // are they in deuce
    }

    protected function hasWinner(){

    }
    private function hasAdvantage(){
        
    }
    protected function inDeuce(){
        
    }
}
