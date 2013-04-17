<?php

use Behat\Behat\Context\BehatContext;


class StartGameContext extends BehatContext 
{
     private $message;    

    public function __construct()
    {
        // do subcontext initialization
    }

/**
     * @Given /^I am not yet playing$/
     */
    public function iAmNotYetPlaying()
    {
       
    }

    /**
     * @When /^I start a new game$/
     * @param  Game   $game   
     */
    public function iStartANewGame()
    {   
        $message= array('Welcome to Mastermind!', 'Enter guess:');
        $game = new Game($message);
        $this->message = $game->start(null);
        return $game;
    
    }

    /**
     * @Then /^the game should say "([^"]*)"$/
     */
    public function theGameShouldSay($message)
    {
       if(!in_array($message ,$this->message)) throw new \Exception("Faild What it should say");
    }

}

