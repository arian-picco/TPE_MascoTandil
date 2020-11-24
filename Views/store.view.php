<?php

require_once "./libs/smarty/Smarty.class.php";

class StoreView {

    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    } 


    function ShowProducts($products, $categories,$error = null){
     
        $this->smarty->assign('title','Tienda');
        $this->smarty->assign('products', $products);
        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/products_cards.tpl'); 
    }
    
    function showProductDetail($productDetail,$categories, $average, $error = null){
        $this->smarty->assign('title','Detalle');
        $this->smarty->assign('error', $error);
        $this->smarty->assign('average', $average);
        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('productDetail', $productDetail);
        $this->smarty->display('templates/detail.tpl'); 
    }

    function showProductByCategory($productsByCatogory,$categories){
        $this->smarty->assign('title','Tienda');
        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('products', $productsByCatogory);
        $this->smarty->display('templates/products_cards.tpl'); 
    }

    function showCategoriesEditionPanel($categories, $error = null){
        $this->smarty->assign('title','Panel de Edicion');
        $this->smarty->assign('categories', $categories);
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/edit_category.tpl'); 
    }

    
    

      function showError($message){
         $smarty = new Smarty();
         $this->smarty->assign('title','Error');
         $smarty->assign('error', $message);
         $smarty->display('templates/error.tpl'); 
      }

      function showErrorDetail($message){
        $smarty = new Smarty();
        $this->smarty->assign('title','Error');
        $smarty->assign('error', $message);
        $smarty->display('templates/error.tpl'); 
     }

     function showCategoryError($message){
        $smarty = new Smarty();
        $this->smarty->assign('title','Error');
        $smarty->assign('error', $message);
        $smarty->display('templates/errorCategory.tpl'); 
     }



    //  function showErrorDetail($message){
    //     $smarty = new Smarty();
    //     $smarty->assign('Mascotandil',$this->title);
    //     $smarty->assign('error', $message);
    //     $smarty->display('templates/detail.tpl'); 
    //  }
}
