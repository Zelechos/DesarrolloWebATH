'use strict'

var Numero;

function ParOImpar(Number1){
    Number1(Numero);

  if(Numero %2==0){
    document.write("Numero Par");
  }else{
    document.write("Numero Impar");
  }
}

//Usando callsback para aprender y practicar mas ;)
ParOImpar( Num =>{
   Numero = parseInt(prompt("Digite un numero :"));
});
