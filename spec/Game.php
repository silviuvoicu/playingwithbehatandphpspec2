<?php

namespace spec;

use PHPSpec2\ObjectBehavior;

class Game extends ObjectBehavior
{   
    private $message;
    
    function let($message)
    {
      $this->beConstructedWith($message);
    }
    function it_should_be_initializable($message)
    {
        $this->shouldHaveType('Game');
    }
    
   function it_should_send_a_message_when_it_starts()
   {
       $this->start()->shouldReturn($this->message);
   } 
}
