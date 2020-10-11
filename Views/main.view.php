<?php

require_once "./libs/smarty/Smarty.class.php";

class MainView{

    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    } 

    function ShowHome(){
        $this->smarty->assign('title','MascoTandil');
        $this->smarty->display('templates/main.tpl'); 
    }


}


?>