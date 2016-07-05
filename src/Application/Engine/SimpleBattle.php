<?php

namespace Application\Engine;

class SimpleBattle extends Battle {

    public $weapon;

    public $human;

    public $machine;

    function __construct (Human $human,  Machine $machine){
        $this->human = $human;
        $this->machine = $machine;
        $this->machine->setStrength($this->human->getStrength() );
    }

    function attack(){
        return $this->human->getWeapon()->attack($this->machine, $this->human );
    }
}
