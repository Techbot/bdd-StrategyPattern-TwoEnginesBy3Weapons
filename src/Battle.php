<?php
namespace Engine;

abstract class Battle {
    
    private $playerStrength;
    
    public $weapon;

    public $human;

    public $machine;
    

    function __construct( Human $human,  Machine $machine ) {
        $this->human = $human;
        $this->machine = $machine;
    }
    
    function attack(){
        
        return $this->human->getWeapon()->attack($this->machine, $this->human );
    }

    function attacked(){

        return $this->machine->getWeapon()->attack($this->human, $this->machine);
    }
   
}

