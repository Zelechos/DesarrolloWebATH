'use strict'
var Producto = document.getElementById("Producto");

function Guardar(){

    
    var Product = document.createTextNode(Producto.value);
    var LI = document.createElement("li");
    LI.appendChild(Product);

    var Cosas = document.getElementById("lista");
    Cosas.insertBefore(LI,null);
}

Guardar();