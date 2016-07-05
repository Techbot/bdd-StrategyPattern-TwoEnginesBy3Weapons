<?php

namespace spec\Application\Engine;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SwordSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith(16);
        $this->shouldHaveType('Application\Engine\Sword');
    }
}
