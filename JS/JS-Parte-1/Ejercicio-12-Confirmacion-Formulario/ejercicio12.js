document.getElementById("form").method = "get";
document.getElementById("form").action =
  "../../HTML/Ejercicio-3/respuestaForm.html";

document.getElementById("enviar").addEventListener("click", function () {
  let confirma = confirm("Desea enviar el formulario?");
  if (confirm) {
    document.getElementById("form").submit();
  }
});

document.getElementById("reset").addEventListener("click", function () {
  let confirma = confirm("Desea reestablecer el formulario?");
  if (confirm) {
    document.getElementById("form").reset();
  }
});
