<?php
use Behat\Behat\Context\BehatContext;
use Behat\Behat\Exception\PendingException;

class SubmitsGuessContext extends BehatContext 
{

    public function __construct()
    {
        // do subcontext initialization
    }

   /**
     * @Given /^the secret code is "([^"]*)"$/
     */
    public function theSecretCodeIs($code)
    {
        throw new PendingException();
    }

    /**
     * @When /^I guess "([^"]*)"$/
     */
    public function iGuess($quess)
    {
        throw new PendingException();
    }

    /**
     * @Then /^the mark should be "([^"]*)"$/
     */
    public function theMarkShouldBe($mark)
    {
        throw new PendingException();
    }



}
