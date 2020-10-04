document.addEventListener("DOMContentLoaded",iniciarPagina);

function iniciarPagina(){
"use strict"
    let nav=document.querySelector(".vista");
    document.querySelector(".btn-menu").addEventListener("click", function(){
        nav.classList.toggle("cambio");
        document.querySelector(".botonM").classList.toggle("blanco");
    });
}

