<?php

/**
 * Authenticate
 *
 * @package             KHLIMit
 * @ author  		Segers Stefan
 * @ version		0.1
 * @ date		29/11/2010
 *
 * the Authenticate class has the following properties and methods:
 * properties:  none
 * methods: LogIn, LogOff, Authenticate
 *
 */

class TinyMVC_Library_Login {
    
/**
        * Constructor
        */
    public function __construct(){

    }
    /**
        * Destructor
        */
    public function __destruct(){
        
    }
    
    
    
    public function LogIn($user,$pass) {
      
             $_SESSION['loc']= $user;
             $_SESSION['pass']= $pass;

    }     


    public function LogOff() {
        
        unset ($_SESSION['loc']);
        unset ($_SESSION['pass']);
        session_stop();
        return true;
    }
    public function Result($jaar,$maand){
        $_SESSION['jaar'] = $jaar;
        $_SESSION['maand'] = $maand;
    }
    
   
}


?>