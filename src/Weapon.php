<?php
/**
 * Created by PhpStorm.
 * User: techbot
 * Date: 28/06/16
 * Time: 20:36
 */

namespace Engine;

abstract class Weapon {
    protected $strength;

    function __construct( $strength ) {
        $this->strength = $strength;
    }

    abstract function attack(Player $attackee, Player $attacker );

    function reduce(){
        return $this->strength - 1;

    }

    function increase(){
        return $this->strength + 1;

    }
}