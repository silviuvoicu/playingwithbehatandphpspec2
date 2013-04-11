<?php

class Game
{
    private  $message;
    
    public function __construct($message)
    {  
       $this->message = $message;
    }
    public function start()
    {
      return $this->message;
    }
}
