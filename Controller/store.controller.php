<?php

include_once 'Views/store.view.php';
require_once "Controller/store.controller.php";

class StoreController {


 private $view;
 private $model;
 private $categoryModel;

    function __construct() {
        $this->view = new StoreView();
        $this->model = new ProductsModel();
        $this->categoryModel = new CategoriesModel();

    }

    function showProducts(){
        $products = $this->model->getProducts();
        $this->view->showProducts($products);
    }

    function showProductDetail($productSelected){
        $productDetail= $this->model->getProductDetail($productSelected);
        $this->view->showProductDetail($productDetail);
    }

    function showProductByCategory($categorySelected){
        $productsByCatogory= $this->categoryModel->getProductByCategory($categorySelected);
        $this->view->showProductByCategory($productsByCatogory);
    }

    function DeleteProduct($product_id){
        $this->model->DeleteProduct($product_id);
        $products = $this->model->getProducts();
        $this->view->showProducts($products);
    }

    function insertProduct(){
        $name = $_REQUEST['input_name'];
        $description = $_REQUEST['input_description'];
        $price = $_REQUEST['input_price'];
        $id_category = $_REQUEST['input_category'];

        if(empty($name) || empty($description) ||
           empty($price) || empty($id_category) ) {
           $this->view->showError('faltan datos obligatorios');
           die();
           } 
        $this->model->InsertProduct($name,$description,$price,$id_category);
        $products = $this->model->getProducts();
        $this->view->showProducts($products);

    }

    function updateProduct($id) {

        $name = $_REQUEST['input_name'];
        $description = $_REQUEST['input_description'];
        $price = $_REQUEST['input_price'];
        $id_category = $_REQUEST['input_category'];
        
        if(empty($name) || empty($description) ||
        empty($price) || empty($id_category) ) {
        $this->view->showErrorDetail('faltan datos obligatorios');
        die();
        } 

        $this->model->updateProduct($name,$description,$price,$id_category,$id);
        
        $productDetailUpdated= $this->model->getProductDetail($id);

        $this->view->showProductDetail($productDetailUpdated);

       
    
    }

}

?>