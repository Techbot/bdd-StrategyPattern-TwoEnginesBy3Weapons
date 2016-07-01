<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Engine\Advanced;
use Engine\Sword;
use Engine\Dice;
use Engine\Weapon;
use Engine\Player;
use Engine\Human;
use PHPUnit_Framework_Assert as Assert;
use Engine\Machine;
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
    
    private $opponent;
    
    private $human;
    
    private $machine;  
    
    public function __construct()
    {
        $this->human =  new Human(6,6, 'Peter');
        $this->machine = new Machine(6,6);
        $this->weapon = new Sword('16');
    }

    /**
     * @When I roll a dice 
     */
    public function iRollaDice()
    {
      $this->diceRoll = Dice::roll();
    }

    /**
     * @Then I should get my total score
     */
    public function iShouldGetMyTotalScore()
    {
        $this->round = new Advanced($this->human, new Sword($this->strength), $this->machine );
        $totalScore =  $this->diceRoll + $this->strength ;
        Assert::assertTrue($this->round->getTotalScore($this->strength ) === $totalScore);
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
        $this->round = new Advanced( $this->human, new Sword($this->strength), $this->machine );
    }

    /**
     * @Then I should get a result
     */
    public function iShouldGetAResult()
    {
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
        $this->strength = $this->weapon->reduce();
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
        $this->strength = $this->weapon->increase();
    }
}
