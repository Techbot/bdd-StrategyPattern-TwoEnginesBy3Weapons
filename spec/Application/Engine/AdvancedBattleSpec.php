<?php

namespace spec\Application\Engine;

use Application\Engine\Human;
use Application\Engine\Machine;
use Application\Engine\Sword;
use Application\Engine\AdvancedBattle;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AdvancedBattleSpec extends ObjectBehavior
{

    function it_is_initializable()
    {
        $human = new Human(6,6,6, new Sword('16'), 'Peter' );
        $machine = new Machine(6,6,6, new Sword('16'));
        $this->beConstructedWith($human, $machine);
        $this->shouldHaveType('Application\Engine\AdvancedBattle');
    }
}
