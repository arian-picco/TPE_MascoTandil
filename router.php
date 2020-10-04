<?php

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


require_once 'Controller/home.controller.php';
require_once 'Controller/store.controller.php';
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

switch($params[0]) {
    case 'home':
        $homeController->showHome();
        break;
    case '':
        $homeController->showHome();
        break;
    case 'hairdressing':
        $homeController->showHairDressing();
        break;
    // case 'store':
    //     $homeController->showStore();
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
    case 'delete':
        $storeController->DeleteProduct($params[1]);
        break;       
    default: echo '404 error';
}