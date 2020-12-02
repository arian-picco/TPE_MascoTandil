<?php
require_once "Model/comments.model.php";
require_once "api/api.view.php";
require_once "api/api.controller.php";

class ApiCommentsController extends ApiController{
    protected $model;
    protected $view;


    function __construct(){
        parent::__construct();
        $this->model = new CommentsModel();
        $this->view = new APIview();

    }



    //verificar los path al detail

    public function getCommentsOfaProduct($params = null){
        $id_product = $params[':ID'];
        $comments = $this->model->getCommentsOfaProduct($id_product);
          if($comments) {
            $this->view->response($comments, 200);
        } 
        else {
            //la respuesta es 200 porqué devuelve un arreglo vacio - porque no hay comment, pero no es que el endpoint no existe
            $this->view->response("No existe el comentario solicitado", 200);
        }
    }

  
    public function deleteComment($params = null) {
        $idComment = $params[':ID'];
        //declaramos success con la acción de borrar un comentario
        $success =  $this->model->deleteComment($idComment);
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
        $score = $body->score;
        $id_product = $body->id_product;
        $id_user = $body->id_user;
        //insertComment retorna el id del último comment insertado
        $idComment = $this->model->insertComment($comment,$score,$id_product,$id_user);
        if($idComment){
            //te devuelve el comment
            $this->view->response($this->model->getCommentById($idComment), 201);
        } else {
            $this->view->response("el comentario no se insertó", 404);
        }
    }   

}



