<?php
/**
 * Created by PhpStorm.
 * User: techbot
 * Date: 28/06/16
 * Time: 20:36
 */

namespace Engine;

class Sword extends Weapon
{
    private $message;
    
    function attack(Player $attackee, Player $attacker)
    {
        $message = 'draw';
        
        if ($attacker->getStrength() > $attackee->getStrength()) {

            $this->increase();
            
            $message = 'win';
        };
        
        if ($attacker->getStrength() < $attackee->getStrength()) {

            $this->reduce();
            $message = 'lose';
        };
        
        return $message;
    }
}
