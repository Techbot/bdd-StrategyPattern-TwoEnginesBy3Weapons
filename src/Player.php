<?php
/**
 * Created by PhpStorm.
 * User: techbot
 * Date: 29/06/16
 * Time: 11:56
 */

namespace Engine;

abstract class Player
{
    /**
     * @var
     */
    protected $strength;
    /**
     * @var
     */
    protected $skill;
    /**
     * @var
     */
    protected $weapon;

    /**
     * Opponent constructor.
     * @param $strength
     * @param $skill
     * @param $weapon
     */
    public function __construct($strength, $skill, $weapon)
    {
        $this->strength = $strength;
        $this->skill = $skill;
    }

    /**
     * @return mixed
     */
    function getStrength()
    {
        return $this->strength;

    }

    /**
     * @return mixed
     */
    function getSkill()
    {
        return $this->skill;

    }
    
    /**
     * @return mixed
     */
    function getWeapon()
    {
        return $this->weapon;
    }
}
