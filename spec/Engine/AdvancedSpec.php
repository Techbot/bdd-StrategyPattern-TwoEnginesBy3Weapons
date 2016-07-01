<?php

namespace spec\Engine;

use Application\Engine\Sword;
use Application\Engine\Advanced;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AdvancedSpec extends ObjectBehavior
{    function let(
    Sword $sword
) {
    $this->beConstructedWith( $sword);

  
}
    function it_is_initializable()
    {
        $weapon = new Sword('8');
        $this->beConstructedThrough($weapon);

       // $this->shouldHaveType('Sword');
    }
 
    
    
    
    
}
