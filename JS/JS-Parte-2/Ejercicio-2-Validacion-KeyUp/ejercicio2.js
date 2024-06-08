document.getElementById("input1").onkeyup = function () {
  if (!document.getElementById("input1").checkValidity()) {
    alert("El campo debe tener un valor entre 1 y 31");
    document.getElementById("input1").value = "";
  }
};

document.getElementById("input2").onkeyup = function () {
  if (!document.getElementById("input2").checkValidity()) {
    alert("El campo debe tener un valor entre 1 y 12");
    document.getElementById("input2").value = "";
  }
};
