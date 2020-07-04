'use strict'
var a = document.getElementById('a');
var b = document.getElementById('b');
var c = document.getElementById('c');
var X1,X2;

function Calcular(){
    var A = a.value;
    var B = b.value;
    var C = c.value
    X1 = (-B+Math.sqrt(B*B-4*A*C))/2*A;
    X2 = (-B-Math.sqrt(B*B-4*A*C))/2*A;

    $('#Resultados').append('<li>x^1 = '+X1+'</li>  <li>x^2  = '+X2+'</li>');


}




