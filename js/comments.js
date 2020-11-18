
// "use strict"

// document.addEventListener("DOMContentLoaded", iniciarPagina);

// function iniciarPagina(){

// //si el usuario esta loggeado debe aparecer un input en forma de text-box

// //tomar el id del contenedor y meterlo en una variable

// //Al cargar la pagina se generará un div que será child del contenedor 

// //dentro de ese dev habra un div por cada comentario y puntaje

// //también se genera una nueva entrada dentro del producto con el promedio del puntaje que recibió el articulo




// }



document.addEventListener("DOMContentLoaded", iniciarPagina);

function iniciarPagina() {

   
   
 
    function crearComentarioDiv() {
        "use strict"
        event.preventDefault();

        let comentario = document.getElementById("input");
        let divComentario = document.createElement('div');
        //crear el comentario y atributos
        divComentario.setAttribute("class", "estiloComentario");
        divComentario.setAttribute("id", "comentarioId");
        divComentario.innerHTML = comentario.value;
        //crear el boton y atributos
        let botonDelete = document.createElement('button');
        botonDelete.setAttribute("class", "botonDelete");
        botonDelete.innerHTML = "Borrar Comentario";
        //añade el div al body y añade el boton al div
        let contenedorComentario = document.getElementById("noticia1");
        contenedorComentario.appendChild(divComentario);
        divComentario.appendChild(botonDelete);
        
        //le añado a todos los botones una función anonima que declara en una variable al elemento padre del botón.
        //THIS hace refencia al boton, y .parentElement al padre del botón.
        //Cuando hace click en el botón se aplica el remove sobre el padre.
        botonDelete.addEventListener("click", function(e){
            let element = this.parentElement;
            element.remove();
        } );


      
       

    }


    

    let enviar = document.getElementById("botonEnviar");
    enviar.addEventListener("click", crearComentarioDiv);


}