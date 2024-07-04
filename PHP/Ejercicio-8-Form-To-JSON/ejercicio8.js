var json =
  '{"repuestos":[{"id":1,"nombre":"Filtro de aire","marca":"Bosch","precio":20.5,"stock":15},{"id":2,"nombre":"Bujia","marca":"NGK","precio":10.0,"stock":30},{"id":3,"nombre":"Pastillas de freno","marca":"Brembo","precio":45.0,"stock":10},{"id":4,"nombre":"Aceite de motor","marca":"Mobil","precio":35.0,"stock":50},{"id":5,"nombre":"Bateria","marca":"ACDelco","precio":120.0,"stock":8}]}';

var repuestos = JSON.parse(json);

$(document).ready(function () {
  $("#activo").click(function () {
    $("#modal").attr("class", "div-activo");
    $("#fondo").attr("class", "fondo-apagado");

    $("#submit").click(function () {
      $("#modal").attr("class", "apagado");
      $("#fondo").attr("class", "fondo-apagado");
      $("#modal-result").attr("class", "div-activo");
      $("#contenido-modal").append("<h2>Esperando respuesta...</h2>");
      $.ajax({
        type: "GET",
        url: "./respuesta.php",
        data: {
          codigo: $("#cod").val(),
          descripcion: $("#desc").val(),
          stock: $("#stock").val(),
          pieza: $("#tipo").val(),
          fecha: $("#fecha").val(),
        },
        success: function (respuestaDelServer, estado) {
          $("#contenido-modal").html(
            "<h2>Resultado:</h2>" + respuestaDelServer
          );
        },
      });
    });

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

    $(".salir").click(function () {
      $("#modal").attr("class", "apagado");
      $("#modal-result").attr("class", "apagado");
      $("#fondo").attr("class", "fondo-encendido");
    });
  });
});
