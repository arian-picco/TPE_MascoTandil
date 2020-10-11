<?php

require_once "./libs/smarty/Smarty.class.php";

class StoreView {

    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    } 


    function ShowProducts($products, $categories){
        $title = '';
        $this->smarty->assign('Tienda',$this->title);
        $this->smarty->assign('products', $products);
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('templates/products.tpl'); 
    }
    
    function showProductDetail($productDetail){
        $this->smarty->assign('Mascotandil',$this->title);
        $this->smarty->assign('productDetail', $productDetail);
        $this->smarty->display('templates/detail.tpl'); 
    }

    function showProductByCategory($productsByCatogory,$categories){
        $this->smarty->assign('Mascotandil',$this->title);
        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('products', $productsByCatogory);
        $this->smarty->display('templates/products.tpl'); 
    }

    function showCategoriesEditionPanel($categories){
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
