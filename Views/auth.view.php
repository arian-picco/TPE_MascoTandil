<?php

require_once "./libs/smarty/Smarty.class.php";

class AuthView{

    private $title;


    function showLogin(){

        $smarty = new Smarty();
        $smarty->assign('Tienda',$this->title);
        $smarty->display('templates/login.tpl'); 
    }



}


?>


  
