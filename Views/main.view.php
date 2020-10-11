<?php

require_once "./libs/smarty/Smarty.class.php";

class MainView{

    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    } 

    function ShowHome(){
        $this->smarty->assign('Mascotandil',$this->title);
        $this->smarty->display('templates/main.tpl'); 
    }

    function showStore(){
        $this->smarty->assign('Tienda',$this->title);
        $this->smarty->display('templates/store.tpl'); 
    }



}


?>