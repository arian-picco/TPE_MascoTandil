<?php

include_once 'Views/store.view.php';
include_once 'Views/store.public.view.php';

class CategoriesController {

 private $view;
 private $model;
 private $categoryModel;
 private $publicView;

    function __construct() {
        $this->view = new StoreView();
        $this->publicView = new StorePublicView();
        $this->model = new ProductsModel();
        $this->categoryModel = new CategoriesModel();
    }

   
    function showCategoryEditionPanel(){
        $products = $this->model->getProducts();
        $categories = $this->categoryModel->getCategories();
        $loggedIn = $this->checkLoggedIn();
        if($loggedIn){
            $this->view->showCategoriesEditionPanel($categories);
        } else {
        $this->publicView->showPublicProducts($products,$categories);
        }
    }

   
    function deleteCategory($params = null){
        $category_id = $params[':ID'];
        $loggedIn = $this->checkLoggedIn();
        if(!$loggedIn){
            header("Location:  " .  BASE_URL . "store");
        } else {
            $hayRelacion = $this->categoryModel->getProductByCategory($category_id);
            if(count($hayRelacion) == 0) {
                $this->categoryModel->deleteCategory($category_id);
            } else {
                $this->view->showCategoryError('No puede eliminar una categoría con productos relacionados');
                die();
            }              
           header("Location:  " .  BASE_URL . "category_edition");
        }
    }


    function insertCategory(){
        $loggedIn = $this->checkLoggedIn();
        if(!$loggedIn){
            header("Location:  " .  BASE_URL . "store");
            } else {
                if(isset($_REQUEST['input_category_name'])){
                $name = $_REQUEST['input_category_name'];
                }   
                if(empty($name)) {
                $this->view->showCategoryError('Faltaron campos obligatorios - Por favor vuelva e intente nuevamente');
                die();
                }     
       $this->categoryModel->insertCategory($name);
        header("Location:  " .  BASE_URL . "category_edition");
        }
    }   

    function updateCategories() {
        $loggedIn = $this->checkLoggedIn();
        if(!$loggedIn){
            header("Location:  " .  BASE_URL . "store");
            } else {
                if(isset($_REQUEST['input_category_name'])&&(isset($_REQUEST['input_id']))){
                 $name = $_REQUEST['input_category_name'];
                 $id = $_REQUEST['input_id'];
                    }
            
                if(empty($name)) {
                $this->view->showCategoryError('Faltaron campos obligatorios - Por favor vuelva e intente nuevamente');
                die();
                }     
            $this->categoryModel->updateCategories($name,$id);
            header("Location:  " .  BASE_URL . "category_edition");
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