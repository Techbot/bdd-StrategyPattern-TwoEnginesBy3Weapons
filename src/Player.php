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
     * Opponent constructor.
     * @param $strength
     * @param $skill
     */
    public function __construct($strength, $skill)
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
}
