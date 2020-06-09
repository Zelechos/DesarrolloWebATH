'use strict'

var Muestra =`<h1> Los Meses del Año son : </h1>`;

//Aqui utilizo un parametro REST (..Año) para Practicar y este parmetro conviete en uun array los elementos
//que le pases a la hora de invocar a la funcion Meses
function Año(...Meses){
  document.write(Muestra);
  document.write("<ul>");
    Meses.forEach((index,data)=> {
    document.writeln("<li><h2>"+index+"</h2></li>");
    }
  );
  document.write("</ul>");
}

//como se muestra aqui
Año("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
