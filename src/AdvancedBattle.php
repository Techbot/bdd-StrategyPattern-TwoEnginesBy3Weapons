<?php
/**
 * Created by PhpStorm.
 * User: techbot
 * Date: 28/06/16
 * Time: 20:36
 */

namespace Engine;

class AdvancedBattle extends Battle
{
 
    function setTotalScore($strength){
        $this->human->setStrength($strength + Dice::roll());
    }

    function getTotalScore(){
        return  $this->human->getStrength();
    }
}
