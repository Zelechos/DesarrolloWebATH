'use strict'
var Imagen;
var Opcion;
function Opciones(){
    Opcion = document.getElementsByName("Opciones");
    Imagen = document.getElementById("imagen");

    if(Opcion[0].checked){

        Imagen.src = "img/amor.png";
        
    }else if(Opcion[1].checked){

        Imagen.src = "img/estrella.png";

    }else if(Opcion[2].checked){

        Imagen.src = "img/pregunta.png";

    }

}
var Fondo = document.getElementById("Resultado");
function Verde(){
    Fondo.style.background= "#31FA00";
}

function Rojo(){
    Fondo.style.background = "#fa0000";
}

function Azul(){
    Fondo.style.background = "#2500fa";
}