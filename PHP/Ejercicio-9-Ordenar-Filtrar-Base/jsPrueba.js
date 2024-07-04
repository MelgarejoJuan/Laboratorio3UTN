$(document).ready(function () {
  //$("#orden").val("num_serie");
  cargaDesplegable();
});

function cargaDesplegable() {
  $.ajax({
    type: "POST",
    url: "./prueba.php",
    success: function (respuesta, estado) {
      var jsonRespuesta = JSON.parse(respuesta);
      jsonRespuesta.marca.forEach(function (marca) {
        let desplegable = $("#filtroMarca");
        var option = document.createElement("option");
        option.setAttribute("value", marca.codmarca);
        option.innerHTML = marca.codmarca;
        desplegable.append(option);
      });
    },
  });
}
