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

        $this->model->InsertProduct($name,$description,$price,$id_category);
        $products = $this->model->getProducts();
        $this->view->showProducts($products);

    }

    function updateProduct($id) {
        var_dump($id); 
   

        $name = $_REQUEST['input_name'];
        $description = $_REQUEST['input_description'];
        $price = $_REQUEST['input_price'];
        $id_category = $_REQUEST['input_category'];
        var_dump($name);  
        var_dump($description);  
        var_dump($price);  
        var_dump($id_category); 

        $this->model->updateProduct($name,$description,$price,$id_category,$id);
        $productDetail= $this->model->getProductDetail($id);
        $this->view->showProductDetail($id);

    
    }

}

?>