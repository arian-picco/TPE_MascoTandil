<?php

require_once "./libs/smarty/Smarty.class.php";

class AuthView {

   private $smarty;

   function __construct() {
       $this->smarty = new Smarty();
   } 


    //el = null es apra poder llamarlo sin el parametro
    function showLogin($error = null){
        $this->smarty->assign('title','Ingreso');
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/login.tpl'); 
    }


 // deberia terminar la validacion


}


?>


  
