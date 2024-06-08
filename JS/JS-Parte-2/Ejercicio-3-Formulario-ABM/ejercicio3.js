document.getElementById("blanqueo").disabled = true;
document.getElementById("alta").disabled = true;
document.getElementById("modificar").disabled = true;
document.getElementById("baja").disabled = true;

inputCliente = document.getElementById("input1");
inputCuenta = document.getElementById("input2");
inputSaldo = document.getElementById("input3");
form = document.getElementById("form");

inputCliente.addEventListener("keyup", function () {
  if (inputCliente.checkValidity()) {
    document.getElementById("blanqueo").disabled = false;
  }
  if (inputCliente.value === "" || inputCuenta === "") {
    document.getElementById("blanqueo").disabled = true;
  }
});

inputCuenta.addEventListener("keyup", function () {
  if (inputCuenta.checkValidity()) {
    document.getElementById("blanqueo").disabled = false;
  }
  if (inputCuenta.value === "") {
    document.getElementById("blanqueo").disabled = true;
  }
});

inputSaldo.addEventListener("keyup", function () {
  if (inputSaldo.checkValidity()) {
    document.getElementById("alta").disabled = false;
    document.getElementById("modificar").disabled = false;
    document.getElementById("baja").disabled = false;
  } else {
    document.getElementById("alta").disabled = true;
    document.getElementById("modificar").disabled = true;
    document.getElementById("baja").disabled = true;
  }
});
