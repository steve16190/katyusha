<?php
/*
 * Standard include functions class
 *
 * Author:  Stephen Smith
 * Date:    29/01/15
 * Version: 1.0
 */

 class StandardInclude {
    
    public function __construct(){
        // Initialise everything that is to be called on runtime.
    }
    
    public function goHome($logout = false){
       if($logout === true){
           unset($_SESSION,$_COOKIE);
       }
       
       header("Location: " . $_SERVER['DOCUMENT_ROOT'] . "/index.php");
    }

 }

 ?>