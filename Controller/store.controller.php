<?php


include_once 'Views/store.view.php';
include_once 'Helpers/auth.helper.php';


class StoreController {


 private $view;
 private $model;
 private $categoryModel;



    function __construct() {
        $this->view = new StoreView();
        $this->model = new ProductsModel();
        $this->categoryModel = new CategoriesModel();
    }

    function showProducts($error = null){
        $products = $this->model->getProducts();
        $categories = $this->categoryModel->getCategories();
        $loggedIn =  AuthHelper::checkLoggedIn();
        if($loggedIn){
            $this->view->showProducts($products,$categories);
        } else {
            $this->view->showProducts($products,$categories);
        }
    }

    function showProductDetail($params = null){
        //toma el id y lo introduce en una variable
        $productSelected = $params[':ID'];
        //guardo las categorias en una variable
        $categories = $this->categoryModel->getCategories();
        //guardo el producto seleccionado en una variable
        $productDetail= $this->model->getProductDetail($productSelected);
        //genero una variable que verifica si esta loggeado o no
        $loggedIn =  AuthHelper::checkLoggedIn();
        //valido que exista el producto
        if(!$productDetail){
            //sino existe se dirige a la store
            header("Location:  " .  BASE_URL . "store");  
            //valido que esté inicada la session
        } else if($loggedIn){
            //si está iniciada se carga la página con session
            $this->view->showProductDetail($productDetail,$categories);
        } else {
            //sino esta iniciada se carga sin session
            $this->view->showProductDetail($productDetail,$categories);   
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
            $this->view->showProductByCategory($productsByCatogory,$categories);
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
                && isset($_REQUEST['input_description']) && isset($_REQUEST['input_price'])
                && isset($_REQUEST['input_image']) && $_FILES['input_image']['type'] == "image/jpg" ||
                $_FILES['input_image']['type'] == "image/jpeg" || $_FILES['input_image']['type'] 
                 == "image/png") 
               {
                    $id_category = $_REQUEST['input_category'];
                    $name = $_REQUEST['input_name'];
                    $description = $_REQUEST['input_description'];
                    $price = $_REQUEST['input_price'];

                    $realPath = 'imagenes/'.uniqid("",true).".".strtolower(pathinfo( $_FILES['input_image']['name'],PATHINFO_EXTENSION));               
                    $ImgTemp = $_FILES["input_image"]["tmp_name"];
                    move_uploaded_file($ImgTemp,$realPath);
                }        
            if(empty($name) || empty($description) ||
            empty($price) || empty($id_category) || empty($realPath)){
                if($loggedIn){
                $error = "Por favor complete todos los campos";
                $products = $this->model->getProducts();
                $categories = $this->categoryModel->getCategories();
                $this->view->showProducts($products,$categories,$error);
                } 
            } else { 
              $this->model->InsertProduct($name,$description,$price,$id_category,$realPath);   
              header("Location:  " .  BASE_URL . "store"); 
            }
        }
    }



    function updateProduct($params = null) {
        $id = $params[':ID'];
        $loggedIn =  AuthHelper::checkLoggedIn();
        if(!$loggedIn){
            header("Location:  " .  BASE_URL . "store");
        } else {
            if(isset($_REQUEST['input_category']) && isset($_REQUEST['input_name'])
                && isset($_REQUEST['input_description']) && isset($_REQUEST['input_price']) 
                && isset($_REQUEST['input_image']) && $_FILES['input_image']['type'] == "image/jpg" ||
                $_FILES['input_image']['type'] == "image/jpeg" || $_FILES['input_image']['type'] 
                 == "image/png")
                {
                $id_category = $_REQUEST['input_category'];
                $name = $_REQUEST['input_name'];
                $description = $_REQUEST['input_description'];
                $price = $_REQUEST['input_price'];

                $realPath = 'imagenes/'.uniqid("",true).".".strtolower(pathinfo( $_FILES['input_image']['name'],PATHINFO_EXTENSION));               
                $ImgTemp = $_FILES["input_image"]["tmp_name"];
                move_uploaded_file($ImgTemp,$realPath);
                }

            if(empty($name) || empty($description) ||
            empty($price) || empty($id_category) || empty($realPath)) {  

                $categories = $this->categoryModel->getCategories();
                $productDetail= $this->model->getProductDetail($id);
                $error = 'Faltaron campos obligatorios - Por favor vuelva e intente nuevamente';
                $this->view->showProductDetail($productDetail,$categories,$error);  
                } else { 
            $this->model->updateProduct($name,$description,$price,$id_category,$id,$realPath);
            $productDetailUpdated= $this->model->getProductDetail($id);
            $categories = $this->categoryModel->getCategories();
            $this->view->showProductDetail($productDetailUpdated,$categories);
                }
        }
    }




}

?>