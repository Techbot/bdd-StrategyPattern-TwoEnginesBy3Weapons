<?php
/**
 * Created by PhpStorm.
 * User: techbot
 * Date: 29/06/16
 * Time: 11:56
 */

namespace Application\Engine;

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
    protected $magic;
    /**
     * @var
     */
    protected $weapon;

    /**
     * Opponent constructor.
     * @param $strength
     * @param $skill
     * @param $magic
     * @param $weapon
     */
    public function __construct($strength, $skill, $magic, $weapon)
    {
        $this->strength = $strength;
        $this->skill = $skill;
        $this->magic = $magic; 
        $this->weapon = $weapon;
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
    function setStrength($strength)
    {
         $this->strength = $strength ;
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
    function getMagic()
    {
        return $this->magic;
    }
    
    /**
     * @return mixed
     */
    function getWeapon()
    {
        return $this->weapon;
    }
}
