<?php


include_once 'Views/store.view.php';
include_once 'Helpers/auth.helper.php';


class StoreController {


 private $view;
 private $model;
 private $categoryModel;
 private $commentModel;



    function __construct() {
        $this->view = new StoreView();
        $this->model = new ProductsModel();
        $this->categoryModel = new CategoriesModel();
        $this->commentModel = new CommentsModel();
    }

    function showProducts($params = null){
        if(isset($params[':byScore'])){
            $order = $params[':byScore'];
        } else if (isset($params[':orderASC'])){
            $order = $params[':orderASC'];
        } else if(isset($params[':orderDESC'])) {
            $order = $params[':orderDESC'];
        } else {
            $order = 'store';
        }
       AuthHelper::checkLoggedIn();
        $this->orderSearch($order);
    }

    function orderSearch($order = null){
        $products = $this->model->getProducts();
        $categories = $this->categoryModel->getCategories();
        switch ($order) {
            case 'byScore':
                $productsByScore = $this->model->getProductsByScore();
                $this->view->showProducts($productsByScore,$categories);
                break;
            case 'orderASC':
                $order = 'ASC';
                $productsByPriceASC = $this->model->getProductsByPrice($order);
                $this->view->showProducts($productsByPriceASC,$categories);
                break;
            case 'orderDESC':
                $order = 'DESC';
                $productsByPriceDESC = $this->model->getProductsByPrice($order);
                 $this->view->showProducts($productsByPriceDESC,$categories);
                break;
            case 'store':
                $this->view->showProducts($products,$categories);
                break;
            default:
                $this->view->showProducts($products,$categories);
                break;
        } 
    }


    function showProductsBySearch(){
        //checkeo que los inputs existan y los guardo en variables
        if(isset($_REQUEST['input_minPrice']) && isset($_REQUEST['input_maxPrice'])
        && isset($_REQUEST['input_search'])){ 
            $minPrice = $_REQUEST['input_minPrice'];
            $maxPrice = $_REQUEST['input_maxPrice'];
            $search = $_REQUEST['input_search'];
            }       
            //mantiene la session en caso de estar loggeado
            AuthHelper::checkLoggedIn();
            $categories = $this->categoryModel->getCategories();  
            $searchedProducts = $this->model->getProductsBySearch($minPrice,$maxPrice,$search);
            //en caso que el arreglo esté vacío cargo la página con mensaje de error
            if (empty($searchedProducts)){
                 $error = 'No se encontraron resultados para la búsqueda';
                $this->view->showProducts($searchedProducts, $categories, $error); 
            } else {
             $this->view->showProducts($searchedProducts,$categories); 
        }   
    }


    function showProductDetail($params = null){
        $productSelected = $params[':ID'];
        $categories = $this->categoryModel->getCategories();
        $productDetail= $this->model->getProductDetail($productSelected);
        $average = $this->commentModel->getProductAverageScore($productSelected);
        AuthHelper::checkLoggedIn();
        if(!$productDetail){
            //sino existe se dirige a la store
            header("Location:  " .  BASE_URL . "store");  
            } 
        $this->view->showProductDetail($productDetail,$categories,$average);  
    }

    function showProductByCategory($params = null){
        $categorySelected = $params[':ID'];
        $productsByCategory= $this->categoryModel->getProductByCategory($categorySelected);
        $categories = $this->categoryModel->getCategories();
        AuthHelper::checkLoggedIn();
        $this->view->showProductByCategory($productsByCategory,$categories);
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
        $isAdmin = AuthHelper::checkAdmin();
        if(!$loggedIn && !$isAdmin){
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
        $isAdmin = AuthHelper::checkAdmin();
        if(!$loggedIn && !$isAdmin){
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
                $productDetail= $this->model->getProductDetail($id);
                $categories = $this->categoryModel->getCategories();
                $average = $this->commentModel->getProductAverageScore($id);
                $error = 'Faltaron campos obligatorios - Por favor vuelva e intente nuevamente';
                $this->view->showProductDetail($productDetail,$categories,$average,$error);  
                } else { 
            $this->model->updateProduct($name,$description,$price,$id_category,$id,$realPath);
            $productDetailUpdated= $this->model->getProductDetail($id);
            $categories = $this->categoryModel->getCategories();
            $average = $this->commentModel->getProductAverageScore($id);
            $this->view->showProductDetail($productDetailUpdated,$categories,$average);
                }
        }
    }

     
 


}

?>