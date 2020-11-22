
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

function getComments() {
    let productId = document.querySelector('#product_id').value;
    fetch('api/detail/' + productId + '/comments')
        //obtengo la data en forma de json
        .then(response => response.json())
        //trabajo con la informacion obtenida
        .then(comments => render(comments))
        .catch(error => console.log(error))
}

function addComment() {

    let product = document.querySelector('#product_id').value;

    const commentBody = {
        comment: document.querySelector('#comment').value,
        score: document.querySelector('#score').value,
        id_product: document.querySelector('#product_id').value,
        id_user: document.querySelector('#user_id').value
    }

    fetch('api/detail/' + product + '/comments', {
        method: 'POST',
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(commentBody)
    })
        .then(response => response.json())
        .then(commentBody => console.log(commentBody))
        //llamada asincronica - me aseguro que hacer el getComents después del cambio
        .then( () => getComments())
        .catch(error => console.log(error));

 
}

function deleteComment(e) {
    let commentId = e.target.parentElement.id;
    let productId = document.querySelector('#product_id').value;
    fetch('api/detail/' + productId + '/comments/' + commentId, {
        method: "Delete",
        mode: "cors",
    })
        .then((response) => {
            if (!response.ok) {
                console.log("error");
            }
            return response.json();
        })
        .then((json) => {
            getComments();
        });
}

function render(comments) {
    const container = document.querySelector('#comments-box');
    container.innerHTML = "";
    if (verifyComment(comments)) {
        const isAdmin = document.querySelector('#isAdmin').value;
         for (let comment of comments) {
            let divComentario = document.createElement('div');
            //crear el comentario y atributos
            divComentario.setAttribute("class", "estiloComentario");
            divComentario.setAttribute("id", comment.id);
            divComentario.innerHTML = comment.comment;
            //genero la el cuadrito del autor
            let divAutor = document.createElement('div');
            divAutor.setAttribute("class", "cuadroAutor");
            divAutor.setAttribute("id", "cuadroAutor");
            divAutor.innerHTML = comment.username;
            //crear el boton y atributos
            if (isAdmin == 1) {
                let botonDelete = document.createElement('button');
                botonDelete.setAttribute("class", "botonDelete");
                botonDelete.innerHTML = "Borrar Comentario";
                divComentario.appendChild(botonDelete);
                botonDelete.addEventListener("click", deleteComment);
            }
            //añade el div al body y añade el boton al div
            divComentario.appendChild(divAutor);
            container.appendChild(divComentario);
        }
    } else {
        noCommentsSign();
    }
}

function verifyComment(comments) {
  return comments.length>0;
}

function noCommentsSign() {
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

