
"use strict"

//pongo las cosas que quiero que se disparen autoamticamente cuando la página se carga
document.addEventListener('DOMContentLoaded', () => {

    getComments();


    
    let form = document.querySelector('#formComments')
    form.addEventListener('submit', e => {
        e.preventDefault();
        addComment();
        form.reset();
    })
})

function getComments() {
    // let productId = document.querySelector('#product_id').value;
    let product = document.querySelector('#product-detail');
    let productId = product.getAttribute('data-productId');
    fetch('api/detail/' + productId + '/comments')
        //obtengo la data en forma de json
        .then(response => response.json())
        //trabajo con la informacion obtenida
        .then(comments => render(comments))
        .catch(error => console.log(error))
}

function addComment() {
    let product = document.querySelector('#product-detail');
    let productId = product.getAttribute('data-productId');
    let userId = product.getAttribute('data-userId'); 
    const commentBody = {
        comment: document.querySelector('#comment').value,
        score: document.querySelector('#score').value,
        id_product: productId,
        id_user: userId
    }

    fetch('api/detail/' + productId + '/comments', {
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
    let product = document.querySelector('#product-detail');
    let productId = product.getAttribute('data-productId');
    let commentId = e.target.parentElement.id;
    fetch('api/detail/' + productId  + '/comments/' + commentId, {
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
    let product = document.querySelector('#product-detail');
    const container = document.querySelector('#comments-box');
    container.innerHTML = "";
    if (verifyComment(comments)) {
        let isAdmin = product.getAttribute('data-isAdmin');
         for (let comment of comments) {
            let divCommentBox = document.createElement('div');
            //crear caja contenedora y atributos
            divCommentBox.setAttribute("class", "commentStyle");
            divCommentBox.setAttribute("id", comment.id);
            //genero la el cuadrito del autor
            let divAutor = document.createElement('div');
            divAutor.setAttribute("class", "AuthorBox");
            //genero el h4 que contiene el autor
            let authorTitle = document.createElement('h4');
            authorTitle.innerHTML = 'Comentario de ' + comment.username;
            //genero el div comment
            let divComment = document.createElement('div');
            divComment.setAttribute("class", "comment");
            //genero el p que contiene el comentario
            let pcomment = document.createElement('p');
            pcomment.setAttribute('class', 'prg')
            pcomment.innerHTML = comment.comment;
            //genero el cuadro del puntaje
            let divScore = document.createElement('div');
            divScore.setAttribute('class', 'score');
            let scoreTitle = document.createElement('h4');
            scoreTitle.innerHTML = comment.score;

       
            //añade los elementos al dom
            container.appendChild(divCommentBox);
            divCommentBox.appendChild(divAutor);
            divCommentBox.appendChild(divComment);
            divCommentBox.appendChild(divScore);
            divAutor.appendChild(authorTitle);
            divComment.appendChild(pcomment);
            divScore.appendChild(scoreTitle);
       
            //crear el boton y atributos
            if (isAdmin == 1) {
            let botonDelete = document.createElement('button');
            botonDelete.setAttribute("class", "botonDelete");
            botonDelete.innerHTML = "Borrar Comentario";
            divCommentBox.appendChild(botonDelete);
            botonDelete.addEventListener("click", deleteComment);
            }
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
    divComentario.setAttribute("class", "commentStyle");
    divComentario.setAttribute("id", "comentarioId");

    let signText = document.createElement('p');
    let text = "No existen comentarios para éste artículo";

    signText.innerHTML = text;

    container.appendChild(divComentario);
    divComentario.appendChild(signText);

}

