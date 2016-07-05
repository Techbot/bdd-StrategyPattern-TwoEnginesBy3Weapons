<?php

namespace spec\Application\Engine;

use Application\Engine\Sword;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class HumanSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith(6,6,6, new Sword('16'), 'Peter');
        $this->shouldHaveType('Application\Engine\Human');
    }
}
