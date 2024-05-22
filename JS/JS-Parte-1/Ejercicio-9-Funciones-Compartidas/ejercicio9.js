let num;
let acum = 0;

num = document.getElementById("entrada");

document.getElementById("1").addEventListener("click", function () {
  num.value += 1;
});

document.getElementById("2").addEventListener("click", function () {
  num.value += 2;
});

document.getElementById("3").addEventListener("click", function () {
  num.value += 3;
});

document.getElementById("4").addEventListener("click", function () {
  num.value += 4;
});

document.getElementById("5").addEventListener("click", function () {
  num.value += 5;
});

document.getElementById("6").addEventListener("click", function () {
  num.value += 6;
});

document.getElementById("7").addEventListener("click", function () {
  num.value += 7;
});

document.getElementById("8").addEventListener("click", function () {
  num.value += 8;
});

document.getElementById("9").addEventListener("click", function () {
  num.value += 9;
});

document.getElementById("suma").addEventListener("click", function () {
  const parsed = parseInt(num.value);
  acum += parsed;
  num.value = "";
});

document.getElementById("mostrarAcum").addEventListener("click", function () {
  alert("Acumulador: " + acum);
});

document.getElementById("borraAcum").addEventListener("click", function () {
  acum = 0;
});

document.getElementById("borraDisplay").addEventListener("click", function () {
  num.value = "";
});
