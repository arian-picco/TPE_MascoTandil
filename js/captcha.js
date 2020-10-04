document.addEventListener("DOMContentLoaded", iniciarPagina);



function iniciarPagina() {

"use strict";


//A. Tomamos los elementos del DOM de la pagina Masco-cuidados

let contenedor = document.querySelector("#captcha-contenedor");
let boton_formulario = document.querySelector("#boton");


//B. Esta función que creará y validará el captcha

function crearContenedorCaptcha() {
    event.preventDefault();
    //Sirve para que el botón del form no actualice la página

    //Genera el div que contendrá la caja con todo.
    let contenedorCaptcha = document.createElement('div');
    contenedorCaptcha.setAttribute('class', 'captcha');
    //setAttribute lo que hace es agregarle una clase y el nombre de la misma.
    //la clase se crea en el main.css
    contenedor.appendChild(contenedorCaptcha);
    //añade el elemento creado a contenedor. contenedor lo defini arriba como elemento tomado del DOM
    

    //Se repite el proceso pero para generar el campo input donde el usuario ingresa el captcha
    let input = document.createElement('input');
    input.setAttribute('type', 'text');
    input.setAttribute('id', 'input');
    input.setAttribute('class', 'captcha');
    input.setAttribute('placeholder', 'Ingrese el captcha');
    contenedorCaptcha.appendChild(input);

    //Se repite  el proceso pero para generar un div que contendrá el resultado
    let resultado = document.createElement('div');
    resultado.setAttribute('class', 'captcha');
    resultado.setAttribute('id', 'resultado');
    contenedorCaptcha.appendChild(resultado);

     //Se repite  el proceso pero para generar un div que contendrá el capcha 
    let mostrarCaptcha = document.createElement('div');
    mostrarCaptcha.setAttribute('class', 'captcha');
    mostrarCaptcha.setAttribute('id', 'mostrarCaptcha');
    contenedorCaptcha.appendChild(mostrarCaptcha);

     //Se repite  el proceso pero para generar el boton
    let boton = document.createElement('input');
    boton.setAttribute('class', 'captcha');
    boton.setAttribute('id', 'boton2');
    boton.setAttribute('value', 'enviar captcha');
    boton.setAttribute('type', 'button');
    contenedorCaptcha.appendChild(boton);


    //ACA COMIENZA EL CODIGO QUE GENERA EL CAPTCHA, TOMA EL INPUT Y LO VALIDA:

    //1. Declaramos las variables del DOM que se va a utilizar 
    //se utiliza lo generado arriba
    let inputElement = document.querySelector("#input");
    let captchaScreen = document.querySelector("#mostrarCaptcha");
    let resultado1 = document.querySelector("#resultado");
    let boton_capcha = document.getElementById('boton2');

    //2.Genera una combinacion de numeros al azar.
    function generateCaptcha() {
        let firstNumber = Math.floor((Math.random() * 90000));
        return firstNumber;
    }

    //3.Inserta el captcha en el dom
    captchaScreen.innerHTML = generateCaptcha();

    //4.1 Valida que el captcha y el input tengan el mismo valor
    function validarCaptcha() {
        let valorCaptcha = captchaScreen.textContent;
        //no lleva value porque es un vid, no es un componente como el input.
        let valorInput = inputElement.value;

        if (valorCaptcha === valorInput) {
            //comparacion por valor y por tipo
            resultado1.innerHTML = "CORRECTO - Su formulario será enviado";
            boton_capcha.value=""; // desaparece el boton
            captchaScreen.textContent=""; // donde esta el captcha generado lo muestra vacio
            input.classList.add('ocultar');
            boton_capcha.classList.add('ocultar')
            inputElement.value="";// carga el input con vacio
            inputElement.disabled=true; //deshabilita el ingreso del input
            input.setAttribute("placeholder",""); // carga el placeholder con vacio

        }
        else {
            resultado1.innerHTML = "Captcha Incorrecto - Pruebe nuevamente";
            captchaScreen.innerHTML = generateCaptcha();
            boton_capcha.value = "reintentar"; 
        }
    }

    boton_capcha.addEventListener("click", validarCaptcha);

    boton_formulario.removeEventListener("click", crearContenedorCaptcha);//le quita el addEventListener 
   

}

//cel boton del formulario crea una caja con todos los elmentos dentro
boton_formulario.addEventListener("click", crearContenedorCaptcha);

}