<?php

class CoffeeMaker {
    public function brew(){
        var_dump('Brewing Coffee');
    }
}

(new CoffeeMaker())->brew();