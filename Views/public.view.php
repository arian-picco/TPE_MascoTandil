<?php

require_once "./libs/smarty/Smarty.class.php";

class PublicView{

    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    } 

    function showPublicHome(){
        $this->smarty->assign('title','MascoTandil');
        $this->smarty->display('templates/public_main.tpl'); 
    }


}


?>