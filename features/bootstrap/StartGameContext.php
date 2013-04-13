<?php

use Behat\Behat\Context\BehatContext;


class StartGameContext extends BehatContext 
{

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
     */
    public function iStartANewGame()
    {   
        $message= array('Welcome to Mastermind!', 'Enter guess:');
        $game = new Game($message);
        $this->message = $game->start();
    
    }

    /**
     * @Then /^the game should say "([^"]*)"$/
     */
    public function theGameShouldSay($message)
    {
       if(!in_array($message ,$this->message)) throw new \Exception("Faild What it should say");
    }

}

