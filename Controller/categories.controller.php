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
        $this->checkLogged();
        $categories = $this->categoryModel->getCategories();
        $this->view->showCategoriesEditionPanel($categories);
    }

   
    function deleteCategory($category_id){
        $this->categoryModel->deleteCategory($category_id);
        $categories = $this->categoryModel->getCategories();
        $this->view->showCategoriesEditionPanel($categories);
    }


    function insertCategory(){
        $name = $_REQUEST['input_category_name'];
        if(empty($name)) {
        //    $this->view->showError('faltan datos obligatorios');
           die();
           } 
        $this->categoryModel->insertCategory($name);
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

    function checkLogged(){
        session_start();
        if(!isset($_SESSION['ID_USER'])){
            header("Location: " . BASE_URL . "admin");
            die();
        }
    }    

}

?>