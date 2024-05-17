var entrada = document.getElementById("input");

document.getElementById("botonMuestra").addEventListener("click", function () {
  alert(entrada.value);
});

document.getElementById("botonSuma").addEventListener("click", function () {
  const parsed = parseInt(entrada.value);
  entrada.value = parsed + 1;
});

document.getElementById("botonPotencia").addEventListener("click", function () {
  const parsed = parseInt(entrada.value);
  entrada.value = Math.pow(parsed, 2);
});

document.getElementById("botonProducto").addEventListener("click", function () {
  const parsed = parseInt(entrada.value);
  entrada.value = parsed * 2;
});

document
  .getElementById("botonPotencia2")
  .addEventListener("click", function () {
    const parsed = parseInt(entrada.value);
    entrada.value = Math.pow(2, parsed);
  });
