<?php
namespace Application\Engine;

use Application\Engine\Dice;

class AdvancedBattle extends Battle
{
    public $weapon;

    public $human;

    public $machine;
    
    function __construct (Human $human,  Machine $machine){
   
        $this->human = $human;  
        $this->machine = $machine;
        $this->human->setStrength($this->human->getStrength() + Dice::roll());
    }
    

    function attack(){
        return $this->human->getWeapon()->attack($this->machine, $this->human );
    }
    
    
}
