
let Ajax = new XMLHttpRequest();
let Iterador = 0;
let bg_resultado = document.getElementById('resultado');
//----------------------Exercise 1----------------------------
function Cargar(Page){
    Ajax.open('GET', Page , true);
    Ajax.onreadystatechange = ()=>{
        if(Ajax.readyState == 4)
            document.getElementById('contenido').innerHTML = Ajax.responseText;
    }
    Ajax.setRequestHeader("Content-type", "text/html; charset = utf-8");
    Ajax.send();
    //Limpiamos el resultado
    bg_resultado.style.height = "150px";
    bg_resultado.innerHTML = "<h3>resultado</h3>";
}

function Red(){
    bg_resultado.style.backgroundColor = "red";
}
function Blue(){
    bg_resultado.style.backgroundColor = "green";
}
function Green(){
    bg_resultado.style.backgroundColor = "blue";
}
function Yellow(){
    bg_resultado.style.backgroundColor = "yellow";
}

//----------------------Exercise 2----------------------------
let eti_contenido = document.getElementById('contenido');
let input = document.getElementById('inp');
let boton = document.getElementById('bot');


function Estado(){
    let Template = `<input id="inp" type="number" placeholder="Introduce un Numero Menor a 10" />
    <button id="bot" onclick="Enviar();">Tabla Sumar</button>`;
    eti_contenido.innerHTML = Template;
    eti_contenido.style.height = "100px";
    eti_contenido.style.backgroundColor = "#2399FB";
    
}

function Enviar(){
    let Number = parseInt(document.querySelector('#inp').value);
    let Suma = 0;
    let Array = [];
    Iterador = 1;

    if(Number <= 10 ){
        while(Iterador <= 10){
            Suma = Number + Iterador;
            Template = `<p>${Iterador} + ${Number} = ${Suma}</p>`;
            Array.push(Template);
            console.log(Array);
            
            Iterador++;
        }

        bg_resultado.innerHTML = Array.join('');
        bg_resultado.style.height = "500px";
    }else{
        Template = `<h3>Digite un Numero Menor o Igual a 10</h3>
        <button id="back" onclick="Estado();">Tabla Sumar</button>`;
        eti_contenido.innerHTML = Template;
        eti_contenido.style.height = "100px";
        eti_contenido.style.backgroundColor = "#2399FB";
        bg_resultado.style.height = "150px";
        bg_resultado.innerHTML = "<h3>resultado</h3>";
    }
}

//----------------------Exercise 3----------------------------

function Enviar(){
    console.log("entroooo a enviar");
    let Cantidad = parseInt(document.getElementById('Cantidad').value);
    let Dato = "Cantidad="+ encodeURI(Cantidad) + "&nocache=" + Math.random();
    Ajax.open('POST', 'data.php' , true);
    Ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    Ajax.send(Dato);
}

function Registrar(){
    console.log("entroooo");
    Iterador = 1;
    Cantidad = parseInt(document.getElementById('Cantidad').value);
    while(Iterador <= Cantidad ){
        Cantidad = parseInt(document.getElementById('Cantidad').value);
    let Titulo = document.getElementById('titulo'+Iterador).value;
    let Texto = document.getElementById('texto'+Iterador).value;
    let Fecha = document.getElementById('fecha'+Iterador).value;

    let Data = "Cantidad="+ encodeURI(Cantidad) 
                + "&titulo"+Iterador+"="+ encodeURI(Titulo)
                + "&texto"+Iterador+"="+ encodeURI(Texto)
                + "&fecha"+Iterador+"="+ encodeURI(Fecha)
                + "&nocache=" + Math.random();

                Ajax.open('POST', 'registrar.php', true);
                Ajax.onreadystatechange = ()=>{ // funcion de respuesta
                    if (Ajax.readyState == 4) {
                            document.getElementById("contenido").innerHTML = Ajax.responseText;
                    }
                }
                Ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
                Ajax.send(Data);
                console.log(Data);
        Iterador++;
    }

}
