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

   
    function deleteCategory($category_id){
        $hayRelacion = $this->categoryModel->getProductByCategory($category_id);
        $loggedIn = $this->checkLoggedIn();
        if(count($hayRelacion) == 0 && $loggedIn ) {
            $this->categoryModel->deleteCategory($category_id);
        } else {
            $this->view->showCategoryError('No puede eliminar una categoría con productos relacionados');
        }
               
        $products = $this->model->getProducts();
        $categories = $this->categoryModel->getCategories();
       
        if($loggedIn){
            $this->view->showCategoriesEditionPanel($categories);
        } else {
        $this->publicView->showPublicProducts($products,$categories);
        }
        
        //si uso BASE URL y dirijo al user a la página de edición lo desloggea
    }


    function insertCategory(){
        $name = $_REQUEST['input_category_name'];
        $loggedIn = $this->checkLoggedIn();
        if(empty($name) && ($loggedIn)) {
            $this->view->showCategoryError('Faltaron campos obligatorios - Por favor vuelva e intente nuevamente');
            die();
        }     
        $this->categoryModel->insertCategory($name);
        $products = $this->model->getProducts();
        $categories = $this->categoryModel->getCategories();
        if($loggedIn){
            $this->view->showCategoriesEditionPanel($categories);
        } else {
            $this->publicView->showPublicProducts($products,$categories);
        }
    }

    function updateCategories() {

        $name = $_REQUEST['input_name'];
        $id = $_REQUEST['input_id'];
        $loggedIn = $this->checkLoggedIn();
        if(empty($name) && ($loggedIn)) {
            $this->view->showCategoryError('Faltaron campos obligatorios - Por favor vuelva e intente nuevamente');
            die();
        }     
        $this->categoryModel->updateCategories($name,$id);
        $categories = $this->categoryModel->getCategories();
        $products = $this->model->getProducts();
            if($loggedIn){
                $this->view->showCategoriesEditionPanel($categories);
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