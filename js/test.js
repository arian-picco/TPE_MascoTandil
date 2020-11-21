
"use strict"

//pongo las cosas que quiero que se disparen autoamticamente cuando la página se carga
document.addEventListener('DOMContentLoaded', () => {

    getComments();

    let form = document.querySelector('#formComments')
    form.addEventListener('submit', e => {
        e.preventDefault();
        addComment();
    })
})

function getComments(){
    let product = document.querySelector('#input_product_id').value;
    fetch('api/detail/'+ product +'/comments')
    //obtengo la data en forma de json
    .then(response => response.json())
    //trabajo con la informacion obtenida
    .then(comments => render(comments))
    .catch(error => console.log(error))
}

function addComment(){

    let product = document.querySelector('#input_product_id').value;

    const commentBody = {
        comment: document.querySelector('#comment').value,
        score: document.querySelector('#score').value,
        id_product: document.querySelector('#input_product_id').value,
        id_user: document.querySelector('#input_user_id').value
    }

     fetch('api/detail/'+product+'/comments', {
        method: 'POST',
        headers: { "Contetn-Type":"application/json"},
        body: JSON.stringify(commentBody)
    })
    .then(response => response.json())
    .then(commentBody => console.log(commentBody))
    .catch(error => console.log(error));

    getComments();
}

    function deleteComment(commentID){

    }


function render(comments){
     if(verifyComment(comments)) { 
        const container = document.querySelector('#comments-box');
        for(let comment of comments){
            let divComentario = document.createElement('div');
            //crear el comentario y atributos
            divComentario.setAttribute("class", "estiloComentario");
            divComentario.setAttribute("id", "comentarioId");
            divComentario.innerHTML = comment.comment;
            //genero la el cuadrito del autor
            let divAutor = document.createElement('div');
            divAutor.setAttribute("class", "cuadroAutor");
            divAutor.setAttribute("id", "cuadroAutor");
            divAutor.innerHTML = comment.username;
            //crear el boton y atributos
            let botonDelete = document.createElement('button');
            botonDelete.setAttribute("class", "botonDelete");
            botonDelete.innerHTML = "Borrar Comentario";
            //añade el div al body y añade el boton al div
            container.appendChild(divComentario);
            divComentario.appendChild(divAutor);
            divComentario.appendChild(botonDelete);
        }

    } else {
        noCommentsSign();
    }
}

function verifyComment(comments){
    let existComment = true;
    if(comments == 'No existe el comentario solicitado'){
        existComment = false;
    }
    return existComment;
}

function noCommentsSign(){
    const container = document.querySelector('#comments-box');
    let divComentario = document.createElement('div');
    divComentario.setAttribute("class", "estiloComentario");
    divComentario.setAttribute("id", "comentarioId");

    let signText = document.createElement('p');
    let text = "No existen comentarios para éste artículo";

    signText.innerHTML = text;
    
    container.appendChild(divComentario);
    divComentario.appendChild(signText);
   
}

