'use strict'
var Palabras = ["aphocraphex","zelechos","ether","router","wifi","java","python","scala","python","kotlin","go","google"];

var Longitud = Palabras.length;
var NumeroAleatorio = parseInt(Math.random()*(0 , 13 ));
var PalabraSeleccionada = Palabras[NumeroAleatorio];
var PalabraTransformado = PalabraSeleccionada.split("");
var LongitudDePalabraTransformada = PalabraTransformado.length;
var Formularios ;
var intentos =0;

console.log(PalabraTransformado);
console.log("la longitud de la palabra es : "+LongitudDePalabraTransformada);

function GeneradorInput() {
        document.write("<h1> La Palabra a adivinar es : </h1>")
    for (let index = 0; index < LongitudDePalabraTransformada; index++) {
        document.write("<input type='text'  id="+index+" ></input>");
        Formularios=document.getElementsByTagName("input");
    }
    console.log(Formularios[2]);
}
var indice = LongitudDePalabraTransformada;
var EtiquetaLetra;
var Letra;
var Imagen;
var cont=0;
var cont1=1;
var Imagenes = ["img/0i.gif","img/1i.png","img/2i.png","img/3i.png","img/4i.png","img/5i.png","img/6i.png","img/7i.png","img/8i.png","img/9i.gif","img/10i.gif"];
function Identificador() {
        
        EtiquetaLetra = document.querySelector("#Letra");
        Letra = EtiquetaLetra.value;
        console.log("La letra es : "+Letra);
    if(PalabraTransformado.includes(Letra)){

        for (let index = 0; index < LongitudDePalabraTransformada; index++) {
            
            if (PalabraTransformado[index]===Letra) {

                var Caja = document.getElementById(index);
                    Caja.value = Letra;

                console.log("letra puesta:"+Caja.value);
                console.log("iterador "+cont1);
                if(indice > cont1){
                    cont1++;
                }else{
                    Imagen = document.getElementById("Imagine");
                    Imagen.src = Imagenes[10];
                }
            }

        }
    }else{
        Imagen = document.getElementById("Imagine");
        if(cont < 9){
            Imagen.src = Imagenes[cont];
            cont++;
        }else{
            Imagen = document.getElementById("Imagine");
            Imagen.src = Imagenes[9];
            alert("APRIMA F5 PARA JUGAR DE NUEVO");
        }

    }
}

Identificador();
GeneradorInput();
