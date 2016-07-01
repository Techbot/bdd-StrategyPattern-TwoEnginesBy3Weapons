<?php
namespace Engine;


abstract class Battle {
    
    private $playerStrength;
    
    public $weapon;

    public $human;

    public $machine;
    

    function __construct( Human $human, Weapon $weapon, Machine $machine ) {
        $this->weapon = $weapon;
        $this->human = $human;
        $this->machine = $machine;
    }
    
    function attack(){
        
        return $this->weapon->attack($this->machine, $this->human );
    }

    function attacked(){

        return $this->weapon->attack($this->human, $this->machine);
    } 
    
    
}

