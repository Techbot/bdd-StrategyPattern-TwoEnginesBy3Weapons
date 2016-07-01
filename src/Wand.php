<?php
/**
 * Created by PhpStorm.
 * User: techbot
 * Date: 28/06/16
 * Time: 20:37
 */

namespace Engine;


class Wand extends Weapon {
    function attack(Player $opponent, Player $attacker) {
        return $opponent;
    }

  
    
    
}