<?php

require_once "./libs/smarty/Smarty.class.php";

class StorePublicView {

    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
        // otra opción es asignar acá la session
        // $this->smarty->assign('username',$_SESSION{'EMAIL_USER'});
    } 


    function ShowPublicProducts($products, $categories){
        $this->smarty->assign('title','Tienda');
        $this->smarty->assign('products', $products);
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('templates/products_public.tpl'); 
    }
    
    function showProductPublicDetail($productDetail){
        $this->smarty->assign('title','Detalle');
        $this->smarty->assign('productDetail', $productDetail);
        $this->smarty->display('templates/detail_public.tpl'); 
    }

    function showProductByCategoryPublic($productsByCatogory,$categories){
        $this->smarty->assign('title','Tienda');
        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('products', $productsByCatogory);
        $this->smarty->display('templates/products_public.tpl'); 
    }

    
     //apuntar a un tpl de error - Show Error

    //  function showError($message){
    //     $smarty = new Smarty();
    //     $smarty->assign('Mascotandil',$this->title);
    //     $smarty->assign('error', $message);
    //     $smarty->display('templates/products.tpl'); 
    //  }

    //  function showErrorDetail($message){
    //     $smarty = new Smarty();
    //     $smarty->assign('Mascotandil',$this->title);
    //     $smarty->assign('error', $message);
    //     $smarty->display('templates/detail.tpl'); 
    //  }
}
