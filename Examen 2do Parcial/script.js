let Ajax = new XMLHttpRequest();

//Exercise 1
function Cargar(Page){
    Ajax.open('GET', Page , true);
    Ajax.onreadystatechange = function(){
        if(Ajax.readyState == 4)
            document.getElementById('contenido').innerHTML = Ajax.responseText;
    }
}

let bg_resultado = document.getElementById('resultado');
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