<?php

include_once 'Views/store.view.php';
include_once 'Views/store.public.view.php';
include_once 'Controller/auth.controller.php';

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
        $this->authController = new AuthController();

    }

    function showProducts(){
       
        $products = $this->model->getProducts();
        $categories = $this->categoryModel->getCategories();

        $loggeado = $this->authController->checkLoggedIn();

          if($loggeado){
            session_start();
            $this->view->showProducts($products,$categories);
            var_dump($loggeado);
        } else {
            $this->publicView->showPublicProducts($products,$categories);
            var_dump($loggeado);
        }
     
    }

    function showProductDetail($productSelected){
        
        $productDetail= $this->model->getProductDetail($productSelected);
        $this->view->showProductDetail($productDetail);
    }

    function showProductByCategory($categorySelected){
        $productsByCatogory= $this->categoryModel->getProductByCategory($categorySelected);
        $categories = $this->categoryModel->getCategories();
        $loggeado = $this->authController->checkLoggedIn();
        if($loggeado){
            $this->view->showProductByCategory($productsByCatogory,$categories);
        } else {
            $this->publicView->showProductByCategoryPublic($productsByCatogory,$categories);
        }
       
    }

    function DeleteProduct($product_id){
        $this->model->DeleteProduct($product_id);
        $products = $this->model->getProducts();
        $categories = $this->categoryModel->getCategories();
        $this->view->showProducts($products, $categories);
    }

    function insertProduct(){
        $name = $_REQUEST['input_name'];
        $description = $_REQUEST['input_description'];
        $price = $_REQUEST['input_price'];
        $id_category = $_REQUEST['input_category'];

        if(empty($name) || empty($description) ||
           empty($price) || empty($id_category) ) {
        //    $this->view->showError('faltan datos obligatorios');
           die();
           } 

        $this->model->InsertProduct($name,$description,$price,$id_category);
        $products = $this->model->getProducts();
        $categories = $this->categoryModel->getCategories();
        $this->view->showProducts($products, $categories);

    }

    function updateProduct($id) {
        $name = $_REQUEST['input_name'];
        $description = $_REQUEST['input_description'];
        $price = $_REQUEST['input_price'];
        $id_category = $_REQUEST['input_category'];
        if(empty($name) || empty($description) ||
        empty($price) || empty($id_category) ) {
        // $this->view->showErrorDetail('faltan datos obligatorios');
        die();
        } 
        $this->model->updateProduct($name,$description,$price,$id_category,$id);
        $productDetailUpdated= $this->model->getProductDetail($id);
        $this->view->showProductDetail($productDetailUpdated);
    }


    function checkLogged(){
        session_start();
        if(!isset($_SESSION['ID_USER'])){
            header("Location: " . BASE_URL . "store");
            die();
        }
    }



}

?>