<?php

namespace spec\Application\Engine;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SpearSpec extends ObjectBehavior
{
    
    function it_is_initializable()
    {
        $this->beConstructedWith(6);
        $this->shouldHaveType('Application\Engine\Spear');
    }
}
