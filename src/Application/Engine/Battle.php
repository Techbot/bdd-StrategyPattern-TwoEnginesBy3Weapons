<?php
namespace Application\Engine;

abstract class Battle {
    
    private $playerStrength;
    
    public $weapon;

    public $human;

    public $machine;

    function __construct( Human $human, Machine $machine ) {
        $this->human = $human;
        $this->machine = $machine;
    }
    
    abstract function attack();

    function attacked(){

        return $this->machine->getWeapon()->attack($this->human, $this->machine);
    }

}

