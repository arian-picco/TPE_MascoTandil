<?php

include_once 'Views/store.view.php';


class CategoriesController {


 private $view;
 private $model;
 private $categoryModel;

    function __construct() {
        $this->view = new StoreView();
        $this->model = new ProductsModel();
        $this->categoryModel = new CategoriesModel();
    }

   
    function showCategoryEditionPanel(){
        $categories = $this->categoryModel->getCategories();
        $this->view->showCategoriesEditionPanel($categories);
    }

   
    function DeleteProduct($category_id){
        $this->model->DeleteCategory($product_id);
        $products = $this->model->getProducts();
        $categories = $this->categoryModel->getCategories();
        $this->view->showCategoriesEditionPanel($categories);
    }


    function insertCategory(){
        $name = $_REQUEST['input_category_name'];
        if(empty($name)) {
        //    $this->view->showError('faltan datos obligatorios');
           die();
           } 
        $this->categoryModel->InsertCategory($name);
        $categories = $this->categoryModel->getCategories();
        $this->view->showCategoriesEditionPanel($categories);

    }

    function updateCategories() {

        $name = $_REQUEST['input_name'];
        $id = $_REQUEST['input_id'];

        if(empty($name)) {
        // $this->view->showErrorDetail('faltan datos obligatorios');
        die();
        } 
        $this->categoryModel->updateCategories($name,$id);
        $categories = $this->categoryModel->getCategories();
        $this->view->showCategoriesEditionPanel($categories);
        
    }

}

?>