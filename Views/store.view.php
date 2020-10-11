<?php

require_once "./libs/smarty/Smarty.class.php";

class StoreView {

    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
        // otra opción es asignar acá la session
        // $this->smarty->assign('username',$_SESSION{'EMAIL_USER'});
    } 


    function ShowProducts($products, $categories){
        $this->smarty->assign('title','Tienda');
        $this->smarty->assign('products', $products);
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('templates/products.tpl'); 
    }
    
    function showProductDetail($productDetail){
        $this->smarty->assign('title','Detalle');
        $this->smarty->assign('productDetail', $productDetail);
        $this->smarty->display('templates/detail.tpl'); 
    }

    function showProductByCategory($productsByCatogory,$categories){
        $this->smarty->assign('title','Tienda');
        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('products', $productsByCatogory);
        $this->smarty->display('templates/products.tpl'); 
    }

    function showCategoriesEditionPanel($categories){
        $this->smarty->assign('title','Panel de Edicion');
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('templates/edit_category.tpl'); 
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
