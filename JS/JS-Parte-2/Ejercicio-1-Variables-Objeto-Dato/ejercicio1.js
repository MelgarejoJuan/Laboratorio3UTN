//Declaro un objeto persona y lo coloco como primer campo de arrayPersonas

var persona = { nombre: "Juan", apellido: "Melgarejo", fechanac: "25/11/1996" };
var arrayPersonas = [persona];

//Pusheo un segundo objeto persona al arrayPersonas

arrayPersonas.push({
  nombre: "Nacho",
  apellido: "Melgarejo",
  fechanac: "22/10/1999",
});

//Declaro un objeto nuevo cuyo primer campo es el arrayPersonas

var objetoPersonas = { persona: arrayPersonas };

//Agrego Funcionalidad al boton de creacion de personas

document.getElementById("creador").addEventListener("click", function () {
  var nom, ape, fecha;

  //Tomo los datos de los imputs y los guardo en un objeto personaTemp, para luego pushearlos al arrayPersonas

  nom = document.getElementById("input1").value;
  ape = document.getElementById("input2").value;
  fecha = document.getElementById("input3").value;

  var personatemp = { nombre: nom, apellido: ape, fechanac: fecha };

  arrayPersonas.push(personatemp);

  //Comienzo la cadena de texto que va a contener todo el codigo HTML que luego asignare al div contenedor "tabla"

  var texto = "<h1>Tabla de Personas</h1>";

  texto = texto + "<table style='border-collapse:collapse;border:solid'>";

  //Recorro el arrayPersonas para crear una nueva fila de la tabla por cada objeto persona que disponga

  objetoPersonas.persona.forEach(function (item, index) {
    texto = texto + "<tr><td>" + item.nombre + "</td>";
    texto = texto + "<td>" + item.apellido + "</td>";
    texto = texto + "<td>" + item.fechanac + "</td></tr>";
  });

  texto = texto + "</table>";

  //Utilizo el metodo lenght para indicar la cantidad de elementos que tiene arrayPersonas

  texto =
    texto +
    "<h4>Longitud del arreglo de objetos: " +
    arrayPersonas.length +
    "<h4>";

  //Finalmente "envio" al div "tabla" todo el codigo html que almacené en la variable "texto"

  document.getElementById("tabla").innerHTML = texto;
});

//Boton para mostrar el div "tabla"

document.getElementById("mostrar").addEventListener("click", function () {
  document.getElementById("tabla").style.display = "block";
});

//Boton para ocultar el div "tabla"

document.getElementById("esconder").addEventListener("click", function () {
  document.getElementById("tabla").style.display = "none";
});
