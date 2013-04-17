<?php
class Game
{
    private  $message;
    private  $secretCode=array();
    private  $quess=array(); 
    
    public function __construct($message)
    {  
       $this->message = $message;
    }
    

    public function start($secretCode)
    { 
        $this->setSecretCode($secretCode);
        return $this->message;
    }

 


    public function setSecretCode($secretCode)
    {
        $this->secretCode = $secretCode;
    }

    public function setGuess($quess)
    {
        $this->quess =$quess;
    }

    public function result()
    {
        $result = '';
       
        foreach($this->secretCode as $i => $code )
       {


          foreach($this->quess as $j => $quess )
          {
         
                    if(($code == $quess) and ($i == $j) )
                   {
                       $result .='b';
                   } 
          
        
          }
        
       }  
     
       foreach($this->secretCode as $i => $code )
       {


          foreach($this->quess as $j => $quess )
          {
         
                  if(($code == $quess) and ($i != $j) )
                   {
                       $result .='w';
                   }  
          
        
          }
        
       }  
     

       return $result;
    }
}
