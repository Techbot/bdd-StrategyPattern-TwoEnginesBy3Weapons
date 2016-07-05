<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Application\Engine\AdvancedBattle;
use Application\Engine\Sword;
use Application\Engine\Dice;
use Application\Engine\Weapon;
use Application\Engine\Player;
use Application\Engine\Human;
use PHPUnit_Framework_Assert as Assert;
use Application\Engine\Machine;
/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    
    private $weapon;
    
    private $battle;  
    
    private $choice;
    
    private $strength;
    
    private $diceRoll;
    
    private $round;  
    
    private $human;
    
    private $machine;  
    
    public function __construct()
    {
        $this->human =  new Human(6,6,6, new Sword('16'), 'Peter' );
        $this->machine = new Machine(6,6,6, new Sword('16'));
    }

    /**
     * @When I select Advanced 
     */
    public function iSelectAdvanced()
    {
        $this->round = new AdvancedBattle($this->human, $this->machine );
    }

    /**
     * @Then I should get my total score
     */
    public function iShouldGetMyTotalScore()
    {
    //    Assert::assertTrue($this->round->getTotalStrength( $this->human) >=6);
    }

    /**
     * @Given I have a strength of :strength
     */
    public function iHaveAStrengthOf($strength)
    {
        $this->strength = $strength;
    }

    /**
     * @Given I have a totalStrength of :totalStrength
     */
    public function iHaveATotalstrengthOf($totalStrength)
    {
       $this->totalStrength = $totalStrength;
    }

    /**
     * @When I attack an opponent
     */
    public function iAttackAnOpponent()
    {
      //  $this->round = new AdvancedBattle( $this->human, $this->machine );
    }

    /**
     * @Then I should get a result
     */
    public function iShouldGetAResult()
    {
        $this->round = new AdvancedBattle( $this->human, $this->machine );
        echo get_class( $this->round);
        $result = $this->round->attack();
        echo ('result ' . $result);
        Assert::assertTrue(  $this->round->attack() == true );
    }

    /**
     * @Given my opponent has totalStrength of :opponentStrength
     */
    public function myOpponentHasTotalstrengthOf($opponentStrength)
    {
        $this->opponentStrength = $opponentStrength;
    }

    /**
     * @When I lose an attack on an opponent
     */
    public function iLoseAnAttackOnAnOpponent()
    {
        $this->strength = $this->human->getWeapon()->reduce();
    }
    
    /**
     * @Then I should have a strength of :strength
     */
    public function iShouldHaveAStrengthOf($strength)
    {
        Assert::assertTrue( $this->strength == $strength );
    }

    /**
     * @When I win an attack on an opponent
     */
    public function iWinAnAttackOnAnOpponent()
    {
        $this->strength = $this->human->getWeapon()->increase();
    }
}
