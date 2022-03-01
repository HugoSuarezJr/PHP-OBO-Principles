<?php

class CoffeeMaker {
    public function brew(){
        var_dump('Brewing Coffee');
    }
}

// "is a" relationship
class SpecialtyCoffeeMaker extends CoffeeMaker {
    public function brewLatte(){
        var_dump("Brewing Latte");
    }
}

(new SpecialtyCoffeeMaker())->brewLatte();