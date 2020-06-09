'use strict'

var Number1 = parseInt(prompt("Digite el primer Numero"));
var Number2 = parseInt(prompt("Digite el segundo Numero"));
var Number3 = parseInt(prompt("Digite el tercer Numero"));
var Number4 = parseInt(prompt("Digite el cuarto Numero"));

var Buscador = 0;
var Mayor=0;
var Numbers = [Number1,Number2,Number3,Number4];

function Mayore(Buscador){
  if(Buscador < 3){
    for(var j = 0 ; j < 3; j++){
      if(Numbers[j] > Numbers[j+1]){
        Mayor = Numbers[j];
        Numbers[j]=Numbers[j+1];
        Numbers[j+1]=Mayor;
      }
    }
  }else{
  console.log(Numbers);
  return Numbers[3];
  }
  return Mayore(Buscador+1);
}

document.write("<h1>El mayor de todos los numeros que ha introducio es : "+Mayore(Buscador)+"</h1>");
