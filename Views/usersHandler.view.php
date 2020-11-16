<?php

require_once "./libs/smarty/Smarty.class.php";

class UserHandlerView {

   private $smarty;

   function __construct() {
       $this->smarty = new Smarty();
   } 

    function showUserEditionPanel($users){
        $this->smarty->assign('title','Gestor de Usuarios');
        $this->smarty->assign('users',$users);
        $this->smarty->display('templates/userEditor.tpl'); 
    }


}


?>


  