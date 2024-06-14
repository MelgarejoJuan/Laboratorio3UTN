var json =
  '{"repuestos":[{"id":1,"nombre":"Filtro de aire","marca":"Bosch","precio":20.5,"stock":15},{"id":2,"nombre":"Bujia","marca":"NGK","precio":10.0,"stock":30},{"id":3,"nombre":"Pastillas de freno","marca":"Brembo","precio":45.0,"stock":10},{"id":4,"nombre":"Aceite de motor","marca":"Mobil","precio":35.0,"stock":50},{"id":5,"nombre":"Bateria","marca":"ACDelco","precio":120.0,"stock":8}]}';

var repuestos = JSON.parse(json);

$(document).ready(function () {
  function creaOpciones() {
    repuestos.repuestos.forEach(function (valor, indice) {
      var opcion = document.createElement("option");
      opcion.setAttribute("className", "opcion-select");
      opcion.setAttribute("value", valor.nombre);
      opcion.innerHTML = valor.nombre;
      $("#tipo").append(opcion);
    });
  }
  creaOpciones();
});
