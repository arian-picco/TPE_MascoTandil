<?php
require_once "Model/comments.model.php";
require_once "api/api.view.php";
require_once "api/ApiController.php";

class ApiTaskController extends ApiController{
    protected $model;
    protected $view;


    function __construct(){
        parent::__construct();
        $this->commentsModel = new CommentsModel();
        $this->view = new APIview();

    }

    public function getComments(){
        $comments = $this->commentsModel->getComments();
        //La vista de la api me devuelve un Json
        $this->view->response($comments,200);
    }

    public function getComment($params = null){
        $idComment = $params[':ID'];
        $comment = $this->commentModel->getComment($idComment);
        if($comment) {
            $this->view->response($comment, 200);
        } else {
            $this->view->response("No existe el comentario solicitado", 404);
        }
    }

    public function deleteComment($params = null) {
        $idComment = $params[':ID'];
        //declaramos success con la acción de borrar un comentario
        $success =  $this->model->DeleteTask($idComment);
        if($success){
            $this->view->response("El comentario con id $idComment se borró satisfactoriamente",200);
        } else {
            $this->view->response("El comentario con el id $idComment no existe", 404);
        }
    }   


    public function insertComment($params = null){
        //traer la data enviada por form - se puede generar en postman
       
        //ponemos en una variable el body del request 
        $body = $this->getData();

        $comment = $body->comment;

        //insertComment retorna el id del último comment insertado

        $idComment = $this->commentModel->insertComment($comment);

        if($idComment){
            //te devuelve el comment
            $this->view->response($this->model->GetTask($idComment), 201);
        } else {
            $this->view->response("la tarea no se insertó", 404);
        }
    }   

}



