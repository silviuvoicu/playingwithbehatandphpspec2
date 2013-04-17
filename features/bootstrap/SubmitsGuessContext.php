<?php
use Behat\Behat\Context\BehatContext;
use Behat\Behat\Exception\PendingException;

require_once 'PHPUnit/Autoload.php';
require_once 'PHPUnit/Framework/Assert/Functions.php';

class SubmitsGuessContext extends BehatContext 
{
   /** 
     *    Game $game 
    */ 
   private $game; 

    public function __construct()
    {
        // do subcontext initialization
    }

   private function getTheGame()
   {
      $this->game = $this->getMainContext()->getSubcontext('start_game')->iStartANewGame();
   }

   /**
     * @Given /^the secret code is "([^"]*)"$/
     */
    public function theSecretCodeIs($code)
    {
        $this->getTheGame();
        $splitCode = explode(" ",$code);
        $this->game->start($splitCode);
    }

    /**
     * @When /^I guess "([^"]*)"$/
     */
    public function iGuess($quess)
    {
        $splitQuess = explode(" ",$quess);
        $this->game->setGuess($splitQuess);
        
    }

    /**
     * @Then /^the mark should be "([^"]*)"$/
     */
    public function theMarkShouldBe($mark)
    {
        assertEquals($mark,$this->game->result());
    }



}
