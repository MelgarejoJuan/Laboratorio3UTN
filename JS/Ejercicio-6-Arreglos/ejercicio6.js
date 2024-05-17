var verduras = [];

verduras = ["Lechuga", "Tomate"];

verduras[2] = prompt(
  "Agregue una tercer verdura al arreglo ['Lechuga', 'Tomate', (Aqui)]"
);

document.getElementById("titulo").innerHTML = "Variables Multidimensionales";
document.getElementById("subtitulo").innerHTML = "Array de índice numérico";
document.getElementById("tipoArray").innerHTML =
  "Tipo de dato del array: " + typeof verduras;
document.getElementById("primerValor").innerHTML =
  "Primer elemento cargado desde el codigo : " + verduras[0];
document.getElementById("segundoValor").innerHTML =
  "Segundo elemtno cargado desde el codigo: " + verduras[1];
document.getElementById("tercerValor").innerHTML =
  "Tercer elemento cargado por el usuario: " + verduras[2];
document.getElementById("cantValores").innerHTML =
  "Cantidad de elementos en el array: " + verduras.length;
