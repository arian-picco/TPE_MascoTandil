<?php

require_once "./libs/smarty/Smarty.class.php";

class StoreView {

    private $title;


    function __construct(){
        $this->title = "Lista de Tareas";
    }


    function ShowProducts($products, $categories){

        $smarty = new Smarty();
        $smarty->assign('Mascotandil',$this->title);
        $smarty->assign('products', $products);
        $smarty->assign('categories', $categories);
        $smarty->display('templates/products.tpl'); 
    }
    
    function showProductDetail($productDetail){
        $smarty = new Smarty();
        $smarty->assign('Mascotandil',$this->title);
        $smarty->assign('productDetail', $productDetail);
        $smarty->display('templates/detail.tpl'); 
    }

    function showProductByCategory($productsByCatogory,$categories){
        $smarty = new Smarty();
        $smarty->assign('Mascotandil',$this->title);
        $smarty->assign('categories', $categories);
        $smarty->assign('products', $productsByCatogory);
        $smarty->display('templates/products.tpl'); 
    }

    function showCategoriesEditionPanel($categories){
        $smarty = new Smarty();
        $smarty->assign('categories', $categories);
        $smarty->display('templates/edit_category.tpl'); 
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
