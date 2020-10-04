<?php

require_once "./libs/smarty/Smarty.class.php";

class MainView{

    private $title;


    function __construct(){
        $this->title = "Lista de Tareas";
    }


    function ShowHome(){

        $smarty = new Smarty();
        $smarty->assign('Mascotandil',$this->title);
        $smarty->display('templates/main.tpl'); 
    }

    function showHairDressing(){

        $smarty = new Smarty();
        $smarty->assign('Peluqueria',$this->title);
        $smarty->display('templates/hairdressing.tpl'); 
    }

    function showStore(){

        $smarty = new Smarty();
        $smarty->assign('Tienda',$this->title);
        $smarty->display('templates/store.tpl'); 
    }
    
}


?>