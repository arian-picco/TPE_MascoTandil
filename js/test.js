// id="comments-box" 

"use strict"

function getComments(){
    fetch('api/detail/50/comments')
    //obtengo la data en forma de json
    .then(response => response.json())
    //trabajo con la informacion obtenida
    .then(comments => console.log(comments))
    .catch(error => console.log(error));
}

getComments();