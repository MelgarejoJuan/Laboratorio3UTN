var a;

alert('Se declaro la variable "a", de alcance global');
alert("Valor de a: " + a);
alert("Tipo de a: " + typeof a);

document.getElementById("valor1").addEventListener("click", function () {
  let a = prompt("Ingrese un valor para la variable global");

  alert("Valor de a (local): " + a);
  alert("Tipo de a (local): " + typeof a);
});

document.getElementById("valor2").addEventListener("click", function () {
  a = prompt("Ingrese un valor para la variable global");

  alert("Valor de a (ahora global): " + a);
  alert("Tipo de a (ahora global): " + typeof a);
});

document.getElementById("valor3").addEventListener("click", function () {
  alert("Valor de a (global): " + a);
  alert("Tipo de a (global): " + typeof a);
});
