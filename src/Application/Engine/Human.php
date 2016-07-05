<?php
namespace Application\Engine;

class Human extends Player
{
    private $name;

    public function __construct($strength, $skill, $magic, $weapon, $name)
    {
        parent::__construct($strength, $skill, $magic, $weapon);
        
        $this->strength = $strength;
        $this->skill = $skill;
        $this->weapon = $weapon;
        $this->magic = $magic;
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    function getName()
    {
        return $this->name;
    }
}

