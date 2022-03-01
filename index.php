<?php

class AchivementType {
        public function name(){

        }

        public function difficulty(){

        }

        public function icon(){

        }
}

class FirstThousandsPoints extends AchivementType {

    public function qualifier($user){

    }

    // override parent behavior

    public function name(){
        return "Welcome aboard!";
    }
}