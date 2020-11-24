<?php

include_once 'Views/store.view.php';
include_once 'Helpers/auth.helper.php';

class CategoriesController
{

    private $view;
    private $categoryModel;

    public function __construct()
    {
        $this->view = new StoreView();
        $this->categoryModel = new CategoriesModel();
    }

    public function showCategoryEditionPanel()
    {
        $categories = $this->categoryModel->getCategories();
        $loggedIn = AuthHelper::checkLoggedIn();
        $isAdmin = AuthHelper::checkAdmin();
        if ($loggedIn && $isAdmin) {
            $this->view->showCategoriesEditionPanel($categories);
        } else {
            header("Location:  " . BASE_URL . "store");
        }
    }

    public function deleteCategory($params = null)
    {
        $category_id = $params[':ID'];
        $loggedIn = AuthHelper::checkLoggedIn();
        $isAdmin = AuthHelper::checkAdmin();
        if(!$loggedIn && !$isAdmin){
            header("Location:  " . BASE_URL . "store");
        } else {
            $hayRelacion = $this->categoryModel->getProductByCategory($category_id);
            if (count($hayRelacion) == 0) {
                $this->categoryModel->deleteCategory($category_id);
            } else {
                $categories = $this->categoryModel->getCategories();
                $error = 'No puede eliminar una categoría con productos relacionados';
                $this->view->showCategoriesEditionPanel($categories, $error);
                die();
            }
            header("Location:  " . BASE_URL . "category_edition");
        }
    }

    public function insertCategory()
    {
        $loggedIn = AuthHelper::checkLoggedIn();
        $isAdmin = AuthHelper::checkAdmin();
        if (!$loggedIn && !$isAdmin) {
            header("Location:  " . BASE_URL . "store");
        } else {
            if (isset($_REQUEST['input_category_name'])) {
                $name = $_REQUEST['input_category_name'];
            }
            if (empty($name)) {
                $categories = $this->categoryModel->getCategories();
                $error = 'Faltaron campos obligatorios - Por favor vuelva e intente nuevamente';
                $this->view->showCategoriesEditionPanel($categories, $error);
            } else {
                $this->categoryModel->insertCategory($name);
                header("Location:  " . BASE_URL . "category_edition");
            }
        }
    }

    public function updateCategories()
    {
        $loggedIn = AuthHelper::checkLoggedIn();
        $isAdmin = AuthHelper::checkAdmin();
        if (!$loggedIn && !$isAdmin) {
            header("Location:  " . BASE_URL . "store");
        } else {
            if (isset($_REQUEST['input_category_name']) && (isset($_REQUEST['input_id']))) {
                $name = $_REQUEST['input_category_name'];
                $id = $_REQUEST['input_id'];
            }
            if (empty($name)) {
                $categories = $this->categoryModel->getCategories();
                $error = 'Faltaron campos obligatorios - Por favor vuelva e intente nuevamente';
                $this->view->showCategoriesEditionPanel($categories, $error);
            } else {
                $this->categoryModel->updateCategories($name, $id);
                header("Location:  " . BASE_URL . "category_edition");
            }
        }
    }

}
