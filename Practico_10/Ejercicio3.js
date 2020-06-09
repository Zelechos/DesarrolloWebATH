'use strict'

var Palabra = prompt("Digite una palabra : ").split("");
var PalabraS = String(Palabra);

var Palindromo = Palabra.reverse();
var PalindromoS = String(Palindromo);

var MensajePalindromo = `<h1>Es un palindromo: <br><strong>${PalindromoS}</strong><br> de <br>  ${PalabraS} <h1>`;
var MensajeNoPalindromo = `<h1>No es un palindromo:<br> <strong>${PalindromoS}</strong><br>  de <br>  ${PalabraS} <h1>`;

function PAlindromo(Palabra){
  if(PalabraS === PalindromoS){
    document.write(MensajePalindromo);

    }else{
      document.write(MensajeNoPalindromo);
    }
}

PAlindromo(Palabra);
