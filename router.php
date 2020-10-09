<?php

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


require_once 'Controller/home.controller.php';
require_once 'Controller/store.controller.php';
require_once 'Controller/login.controller.php';
require_once 'Model/products.model.php';
require_once 'Model/categories.model.php';


if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

$homeController = new HomeController();
$storeController = new StoreController();
$loginController = new LoginController();

switch($params[0]) {
    case 'admin':
        $loginController->showLogin();
        break;
    case 'verify_user':
        $loginController->loginUser();
        break;
    case 'home':
        $homeController->showHome();
        break;
    case '':
        $homeController->showHome();
        break;
        break;
    case 'store':
        $storeController->showProducts();
        break;
    case 'category':
        $storeController->showProductByCategory($params[1]);
        break;
    case 'detail':
        $storeController->showProductDetail($params[1]);
        break;
    case 'insert':
        $storeController->insertProduct();
        break;
    case 'update':
        $storeController->updateProduct($params[1]);
        break;
    case 'category_edition':
        $storeController->showCategoryEditionPanel();
        break;
    // case 'updateCategory':
    //     $storeController->updateCategory($params[1]);
    //     break;    
    case 'delete':
        $storeController->DeleteProduct($params[1]);
        break;       
    default: echo '404 error';
}