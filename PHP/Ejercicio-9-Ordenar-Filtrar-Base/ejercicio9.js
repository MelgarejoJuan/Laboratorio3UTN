function cargaTabla() {
  $("#tabla").empty();
  $("#tabla").html("<h1>Esperando respuesta...</h1>");
  $.ajax({
    type: "get",
    url: "./salidaJSONComponentes.php",
    data: {
      orden: $("#orden").val(),
      filtro_num_serie: $("#filtro_num_serie").val(),
      filtro_detalle: $("#filtro_detalle").val(),
      filtro_costo: $("#filtro_costo").val(),
      filtro_mano_obra: $("#filtro_mano_obra").val(),
      filtro_fecha: $("#filtro_fecha").val(),
      filtro_marca: $("#filtro_marca").val(),
    },
    success: function (respuesta, estado) {
      alert(respuesta);
      $("#tabla").empty();
      var objJSON = JSON.parse(respuesta);
      objJSON.componentes.forEach(function (argvalor, argindice) {
        var fila = document.createElement("tr");

        var celda1 = document.createElement("td");
        celda1.innerHTML = argvalor.numSerie;
        fila.append(celda1);

        var celda2 = document.createElement("td");
        celda2.innerHTML = argvalor.detalle;
        fila.append(celda2);

        var celda3 = document.createElement("td");
        celda3.innerHTML = argvalor.costoComp;
        fila.append(celda3);

        var celda4 = document.createElement("td");
        celda4.innerHTML = argvalor.costoManoObra;
        fila.append(celda4);

        var celda5 = document.createElement("td");
        celda5.innerHTML = argvalor.fechaAlta;
        fila.append(celda5);

        var celda6 = document.createElement("td");
        celda6.innerHTML = argvalor.codMarca;
        fila.append(celda6);

        $("#tabla").append(fila);
      });
    },
  });
}

function cargaDesplegable() {
  $.ajax({
    type: "POST",
    url: "./peticionSelect.php",
    success: function (respuesta, estado) {
      var jsonRespuesta = JSON.parse(respuesta);
      jsonRespuesta.marca.forEach(function (marca) {
        let desplegable = $("#filtro_marca");
        var option = document.createElement("option");
        option.setAttribute("value", marca.codmarca);
        option.innerHTML = marca.codmarca;
        desplegable.append(option);
      });
    },
  });
}

$(document).ready(function () {
  cargaDesplegable();

  $("#carga").click(function () {
    cargaTabla();
  });

  //BOTONES DE ORDEN

  $("#boton-num-serie").click(function () {
    $("#orden").val("numSerie");
  });

  $("#boton-detalle").click(function () {
    $("#orden").val("detalle");
  });

  $("#boton-costo").click(function () {
    $("#orden").val("costoComp");
  });

  $("#boton-mano-obra").click(function () {
    $("#orden").val("costoManoObra");
  });

  $("#boton-fecha").click(function () {
    $("#orden").val("fechaAlta");
  });

  $("#boton-marca").click(function () {
    $("#orden").val("codMarca");
  });
});
