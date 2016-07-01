<?php
/**
 * Created by PhpStorm.
 * User: techbot
 * Date: 29/06/16
 * Time: 11:56
 */

namespace Engine;

class Human extends Player
{
    private $name;
    
    public function __construct($strength, $skill,$name)
    {
        parent::__construct($strength, $skill);
        
        $this->strength = $strength;
        $this->skill = $skill;
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    function getName()
    {
        return $this->name;

    }
}
