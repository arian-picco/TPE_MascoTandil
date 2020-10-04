<?php

require_once "./libs/smarty/Smarty.class.php";

class StoreView {

    private $title;


    function __construct(){
        $this->title = "Lista de Tareas";
    }


    function ShowProducts($products){

        $smarty = new Smarty();
        $smarty->assign('Mascotandil',$this->title);
        $smarty->assign('products', $products);
        $smarty->display('templates/products.tpl'); 
    }
    
    function showProductDetail($productDetail){
        $smarty = new Smarty();
        $smarty->assign('Mascotandil',$this->title);
        $smarty->assign('productDetail', $productDetail);
        $smarty->display('templates/detail.tpl'); 
    }

    function showProductByCategory($productsByCatogory){
        $smarty = new Smarty();
        $smarty->assign('Mascotandil',$this->title);
        $smarty->assign('products', $productsByCatogory);
        $smarty->display('templates/products.tpl'); 
        var_dump($productsByCatogory);
    }
}
