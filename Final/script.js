let BotonActual;
let pass = document.getElementById('Password');

function deshabilitar(){
    pass.disabled = true;
}

function Boton1(){
    BotonActual = document.getElementById('1').value;
    pass.value += BotonActual;
    console.log(pass.value);
}
function Boton2(){
    BotonActual = document.getElementById('2').value;
    pass.value += BotonActual;
    console.log(pass.value);
}function Boton3(){
    BotonActual = document.getElementById('3').value;
    pass.value += BotonActual;
    console.log(pass.value);
}function Boton4(){
    BotonActual = document.getElementById('4').value;
    pass.value += BotonActual;
    console.log(pass.value);
}function Boton5(){
    BotonActual = document.getElementById('5').value;
    pass.value += BotonActual;
    console.log(pass.value);
}function Boton6(){
    BotonActual = document.getElementById('6').value;
    pass.value += BotonActual;
    console.log(pass.value);
}function Boton7(){
    BotonActual = document.getElementById('7').value;
    pass.value += BotonActual;
    console.log(pass.value);
}function Boton8(){
    BotonActual = document.getElementById('8').value;
    pass.value += BotonActual;
    console.log(pass.value);
}function Boton9(){
    BotonActual = document.getElementById('9').value;
    pass.value += BotonActual;
    console.log(pass.value);
}function Boton0(){
    BotonActual = document.getElementById('0').value;
    pass.value += BotonActual;
    console.log(pass.value);
}

function Borrar(){
    pass.value = "";
}



function Autenticar(){

    var Ajax = new XMLHttpRequest() //es hacer llamadas apaginas 
    var parametros = "autenticar.php?Correo="+encodeURI(document.getElementById('Correo').value)+"&Password="+encodeURI(document.getElementById('Password').value)+"&nocache=" + Math.random();
    Ajax.open("get", parametros, true);

    Ajax.onreadystatechange = ()=>{ // funcion de respuesta
        if (Ajax.readyState == 4) {
            document.getElementById("resultado").innerHTML = Ajax.responseText;
        }
    }
    Ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    Ajax.send(); 
}

function Cargar(Page){
    let Ajax = new XMLHttpRequest();
    Ajax.open('GET', Page , true);
    Ajax.onreadystatechange = ()=>{
        if(Ajax.readyState == 4)
            document.getElementById('contenido').innerHTML = Ajax.responseText;
    }
    Ajax.setRequestHeader("Content-type", "text/html; charset = utf-8");
    Ajax.send();
}

let array=[];
let i =0;
let frase = "";
let suma=0;

function Numero(){
    let input = document.getElementById('input').value;
    while(i < input){
        let template = `<input type="text" id=${i} ><br>`;
        array.push(template);
        console.log(array);
        i++;
    }

    let template = `<input type="text" id="res" style="background-color: #0000FF;
	width: 50px;
	color: #F4F4F4;" onclick="suma()"><br>`;
    array.push(template);
    
    document.getElementById('resultado').innerHTML = array.join('');
    i=0
    console.log(String(i));
    while(i<input){
    let eti = document.getElementById(String(i));
        eti.addEventListener('keypress',function(event){
        suma += parseInt( String.fromCharCode(event.keyCode));
    document.getElementById('res').value = suma;

    });



    i++;
    //document.getElementById('res').value ="";
    }

}


function Calendario(){

    var Ajax = new XMLHttpRequest();
    var Parametros = "calendario.php?mes="+ encodeURI(document.getElementById('meses').value)+"&anio="+ encodeURI(document.getElementById('anios').value)+"&nocache=" + Math.random();
    Ajax.open("GET", Parametros, true);
    Ajax.onreadystatechange = function(){ 
        if (Ajax.readyState == 4) {
            document.getElementById('resultado').innerHTML = Ajax.responseText;
        }
    }
    Ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    Ajax.send(); 
}