<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

//
// Require 3rd-party libraries here:
//
   require_once 'PHPUnit/Autoload.php';
   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext extends BehatContext
{    
    private $message;
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
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
       assert(in_array($message ,$this->message));
    }


//
// Place your definition and hook methods here:
//
//    /**
//     * @Given /^I have done something with "([^"]*)"$/
//     */
//    public function iHaveDoneSomethingWith($argument)
//    {
//        doSomethingWith($argument);
//    }
//
}
