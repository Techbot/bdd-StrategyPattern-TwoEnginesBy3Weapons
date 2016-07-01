<?php
/**
 * Created by PhpStorm.
 * User: techbot
 * Date: 28/06/16
 * Time: 20:36
 */

namespace Engine;

class Advanced extends Battle
{
 
    function getTotalScore($strength){
        return $strength + Dice::roll();
 
    }

}