<?php

namespace spec\Application\Engine;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class WandSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Application\Engine\Wand');
    }
}
