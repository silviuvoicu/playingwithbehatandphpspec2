<?php

namespace spec;

use PHPSpec2\ObjectBehavior;

class Game extends ObjectBehavior
{   
    private $message;
  //  private $secretCode;
    
    function let($message)
    {
      $this->beConstructedWith($message);
    }
    function it_should_be_initializable($message)
    {
        $this->shouldHaveType('Game');
    }
    
   function it_should_accepts_the_secret_code_when_it_starts_and_send_a_message($secretCode= null)
   {   
       $this->setSecretCode($secretCode);
       $this->start($secretCode)->shouldReturn($this->message);
       
   } 

   function it_should_set_the_guess($quess)
   {
      $this->setGuess($quess);
   }

   function it_should_return_the_result()
   {
     $this->result()->shouldBeString();  
   }
   
  
}
