<?php
/**
 * Created by PhpStorm.
 * User: techbot
 * Date: 28/06/16
 * Time: 20:37
 */

namespace Engine;

class Wand extends Weapon {
    function attack(Player $attackee, Player $attacker)
    {
        $message = 'draw';

        if ($attacker->getMagic() > $attackee->getMagic()) {
            $this->increase();
            $message = 'win';
        };

        if ($attacker->getMagic() < $attackee->getMagic()) {
            $this->reduce();
            $message = 'lose';
        };

        return $message;
    }
}