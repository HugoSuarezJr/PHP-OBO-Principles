<?php

// Exceptions

class TeamException extends Exception {
    public static function maxMembers(){
        return new static('You may not add more members to your team.');
    }
}

class Member {
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    
}

class Team {
    protected $members = [];

    public function add (Member $member){
        if (count($this->members) === 3){
            throw TeamException::maxMembers();
        }
        $this->members[] = $member;
    }

    public function members(){
        return $this->members;
    }
}

class TeamMembersController{
    public function store(){
        $team = new Team; // max of 3 ppl.
        try{
            $team->add(new Member('Jugo'));
            $team->add(new Member('Papo'));
            $team->add(new Member('Peepo'));
            $team->add(new Member('Acere'));
        } catch(TeamException $e){
            var_dump($e);
        }
        
    }
}

(new TeamMembersController)->store();