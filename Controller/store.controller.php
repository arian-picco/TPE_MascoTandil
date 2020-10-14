<?php

include_once 'Views/store.view.php';
include_once 'Views/store.public.view.php';


class StoreController {


 private $view;
 private $publicView;
 private $model;
 private $categoryModel;
 private $authController;



    function __construct() {
        $this->view = new StoreView();
        $this->publicView = new StorePublicView();
        $this->model = new ProductsModel();
        $this->categoryModel = new CategoriesModel();
    }

    function showProducts(){
        $products = $this->model->getProducts();
        $categories = $this->categoryModel->getCategories();
        $loggedIn = $this->checkLoggedIn();
        if($loggedIn){
            $this->view->showProducts($products,$categories);
        } else {
        $this->publicView->showPublicProducts($products,$categories);
        }
    }

    function showProductDetail($productSelected){
        $categories = $this->categoryModel->getCategories();
        $productDetail= $this->model->getProductDetail($productSelected);
        $loggedIn = $this->checkLoggedIn();
        if($loggedIn){
            $this->view->showProductDetail($productDetail,$categories);
        } else {
            $this->publicView->showProductPublicDetail($productDetail,$categories);
        }      
    }

    function showProductByCategory($categorySelected){
        $productsByCatogory= $this->categoryModel->getProductByCategory($categorySelected);
        $categories = $this->categoryModel->getCategories();
        $loggedIn = $this->checkLoggedIn();
        if($loggedIn){
            $this->view->showProductByCategory($productsByCatogory,$categories);
        } else {
            $this->publicView->showProductByCategoryPublic($productsByCatogory,$categories);
        }
    }

    function DeleteProduct($product_id){
        $this->model->DeleteProduct($product_id);
        $products = $this->model->getProducts();
        $categories = $this->categoryModel->getCategories();
        $loggedIn = $this->checkLoggedIn();
        header("Location:  " .  BASE_URL . "store");
        // if($loggedIn){
        //     $this->view->showProducts($products, $categories);
        // } else {
        //     $this->publicView->showPublicProducts($products,$categories);
        // }
        
    }
       

    function insertProduct(){
        $name = $_REQUEST['input_name'];
        $description = $_REQUEST['input_description'];
        $price = $_REQUEST['input_price'];
        if(isset($_REQUEST['input_category'])){
        $id_category = $_REQUEST['input_category'];
        }
        $loggedIn = $this->checkLoggedIn();
       
        if(empty($name) || empty($description) ||
           empty($price) || is_null($id_category)) {
            if($loggedIn){
            $this->view->showError('Faltaron campos obligatorios - Por favor vuelva e intente nuevamente');
            die();
           } 
        } 
        $this->model->InsertProduct($name,$description,$price,$id_category);
        header("Location:  " .  BASE_URL . "store");
        // $products = $this->model->getProducts();
        // $categories = $this->categoryModel->getCategories();
        
        // if($loggedIn){
        //     $this->view->showProducts($products, $categories);
        // } else {
        //     $this->publicView->showPublicProducts($products,$categories);
        // }
        
    }

    function updateProduct($id) {
        $name = $_REQUEST['input_name'];
        $description = $_REQUEST['input_description'];
        $price = $_REQUEST['input_price'];
        if(isset($_REQUEST['input_category'])){
            $id_category = $_REQUEST['input_category'];
            }
        $loggedIn = $this->checkLoggedIn();  
        if(empty($name) || empty($description) ||
        empty($price) || empty($id_category) ) {
            if($loggedIn){
            $this->view->showErrorDetail('Faltaron campos obligatorios - Por favor vuelva e intente nuevamente');
            die();
           }
        } 
        $this->model->updateProduct($name,$description,$price,$id_category,$id);
        $productDetailUpdated= $this->model->getProductDetail($id);
        $categories = $this->categoryModel->getCategories();
        
        if($loggedIn){
            $this->view->showProductDetail($productDetailUpdated);
        } else {
            $this->publicView->showPublicProducts($products,$categories);
        }
    }


    function checkLoggedIn(){
        session_start();
        if(!isset($_SESSION['EMAIL_USER'])){
            return false;
        } else return true;
    }



}

?>