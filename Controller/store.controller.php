<?php


include_once 'Views/store.view.php';
include_once 'Views/store.public.view.php';
include_once 'Helpers/auth.helper.php';


class StoreController {


 private $view;
 private $publicView;
 private $model;
 private $categoryModel;



    function __construct() {
        $this->view = new StoreView();
        $this->publicView = new StorePublicView();
        $this->model = new ProductsModel();
        $this->categoryModel = new CategoriesModel();
    }

    function showProducts($products = null, $categories = null, $error = null){
        $products = $this->model->getProducts();
        $categories = $this->categoryModel->getCategories();
        $loggedIn =  AuthHelper::checkLoggedIn();
        if($loggedIn){
            $this->view->showProducts($products,$categories);
        } else {
        $this->publicView->showPublicProducts($products,$categories);
        }
    }

    function showProductDetail($params = null){
        $productSelected = $params[':ID'];
        $categories = $this->categoryModel->getCategories();
        $productDetail= $this->model->getProductDetail($productSelected);
        $loggedIn =  AuthHelper::checkLoggedIn();
        if($loggedIn){
            $this->view->showProductDetail($productDetail,$categories);
        } else {
            $this->publicView->showProductPublicDetail($productDetail,$categories);
        }      
    }

    function showProductByCategory($params = null){
        $categorySelected = $params[':ID'];
        $productsByCatogory= $this->categoryModel->getProductByCategory($categorySelected);
        $categories = $this->categoryModel->getCategories();
        $loggedIn =  AuthHelper::checkLoggedIn();
        if($loggedIn){
            $this->view->showProductByCategory($productsByCatogory,$categories);
        } else {
            $this->publicView->showProductByCategoryPublic($productsByCatogory,$categories);
        }
    }

    function DeleteProduct($params = null){
        $product_id = $params[':ID'];
        $loggedIn =  AuthHelper::checkLoggedIn(); 
        if(!$loggedIn){
            header("Location:  " .  BASE_URL . "store");
            }
            else {
                $this->model->DeleteProduct($product_id);
                $loggedIn =  AuthHelper::checkLoggedIn();
                header("Location:  " .  BASE_URL . "store");
            }
    }
       

    function insertProduct(){
        $loggedIn =  AuthHelper::checkLoggedIn();
        if(!$loggedIn){
            header("Location:  " .  BASE_URL . "store");
            }
            else {
                if(isset($_REQUEST['input_category']) && isset($_REQUEST['input_name'])
                && isset($_REQUEST['input_description']) && isset($_REQUEST['input_price']))
                {
                    $id_category = $_REQUEST['input_category'];
                    $name = $_REQUEST['input_name'];
                    $description = $_REQUEST['input_description'];
                    $price = $_REQUEST['input_price'];
                }        
            if(empty($name) || empty($description) ||
            empty($price) || empty($id_category)) {
                if($loggedIn){
                // $this->view->showError('Faltaron campos obligatorios - Por favor vuelva e intente nuevamente');
                $error = "incluilo";
                $products = $this->model->getProducts();
                $categories = $this->categoryModel->getCategories();
                $this->view->showProducts($products,$categories,$error);
                } 
            } 
            $this->model->InsertProduct($name,$description,$price,$id_category);
            header("Location:  " .  BASE_URL . "store");      
        }
    }

    function updateProduct($params = null) {
        $id = $params[':ID'];
        $loggedIn =  AuthHelper::checkLoggedIn();
        if(!$loggedIn){
            header("Location:  " .  BASE_URL . "store");
        } else {
            if(isset($_REQUEST['input_category']) && isset($_REQUEST['input_name'])
                && isset($_REQUEST['input_description']) && isset($_REQUEST['input_price']))
                {
                $id_category = $_REQUEST['input_category'];
                $name = $_REQUEST['input_name'];
                $description = $_REQUEST['input_description'];
                $price = $_REQUEST['input_price'];
                }
            if(empty($name) || empty($description) ||
            empty($price) || empty($id_category) ) {  
                $this->view->showErrorDetail('Faltaron campos obligatorios - Por favor vuelva e intente nuevamente');
                die();
                } 
            $this->model->updateProduct($name,$description,$price,$id_category,$id);
            $productDetailUpdated= $this->model->getProductDetail($id);
            $categories = $this->categoryModel->getCategories();
            $this->view->showProductDetail($productDetailUpdated,$categories);
         }

    }




}

?>