<?php
/**
 * Created by PhpStorm.
 * User: techbot
 * Date: 28/06/16
 * Time: 20:37
 */

namespace Engine;

class Spear extends Weapon {

    private $numberOfSpears;

    function __construct( $numberOfSpears ) {
     
    $this->numberOfSpears=$numberOfSpears;

    }

    function attack(Player $attackee, Player $attacker ) {
  
       foreach ($this->numberOfSpears as $throw) 
       {
           If ($attacker->getSkill() > $attackee->getSkill()){

               $this->increase(); 
       
           }
           If ($attacker->getSkill() < $attackee->getSkill()){

               $this->reduce();
           }
       }
    }
}