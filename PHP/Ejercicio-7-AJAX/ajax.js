$(document).ready(function () {
  $("#boton-encriptar").click(function () {
    $("#result").empty();
    $("#result").attr("class", "style-recibiendo");
    $("#result").html("<h2>Esperando respuesta...</h2>");
    $("#cont-estado").empty();
    $("#cont-estado").html("<h2>Estado del requerimiento:</h2>");

    $.ajax({
      type: "GET",
      url: "./respuesta.php",
      data: { code: $("#input-entrada").val() },
      success: function (respuestaDelServer, estado) {
        $("#result").attr("class", "cont-resultado");
        $("#result").html("<h2>Resultado:</h2>" + respuestaDelServer);
        $("#cont-estado").append("<h4><br>" + estado + "</h4>");
      },
    });
  });
});
