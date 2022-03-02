<?php

class AchievementType {
    public function name(){
        $class = (new ReflectionClass($this))->getShortName();

        return trim(preg_replace('/[A-Z]/', ' $0', $class));
    }

    public function icon(){
        return strtolower(str_replace(' ','-', $this->name())).'.png';
    }
}

class FirstThousandsPoints extends AchievementType {
        public function qualifier($user){

        }
}

class FirstBestAnswer extends AchievementType {
        public function qualifier($user){
            
        }
}

$achievement = new FirstBestAnswer();
echo $achievement->icon();