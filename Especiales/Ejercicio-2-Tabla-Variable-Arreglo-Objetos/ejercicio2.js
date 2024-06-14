var json =
  '{"repuestos":[{"codigo_de_articulo":"A1001","nombre_de_la_autoparte":"Filtro de Aceite","stock":150,"fecha_de_alta":"2023-01-15","descripcion":"Filtro de aceite para motor de 4 cilindros"},{"codigo_de_articulo":"A1002","nombre_de_la_autoparte":"Bujía","stock":300,"fecha_de_alta":"2022-11-10","descripcion":"Bujía estándar para motores de gasolina"},{"codigo_de_articulo":"A1003","nombre_de_la_autoparte":"Faro Delantero","stock":80,"fecha_de_alta":"2023-03-05","descripcion":"Faro delantero para vehículos compactos"},{"codigo_de_articulo":"A1004","nombre_de_la_autoparte":"Pastilla de Freno","stock":200,"fecha_de_alta":"2022-12-20","descripcion":"Pastillas de freno para autos medianos"},{"codigo_de_articulo":"A1005","nombre_de_la_autoparte":"Filtro de Aire","stock":250,"fecha_de_alta":"2023-02-17","descripcion":"Filtro de aire para motores diésel"},{"codigo_de_articulo":"A1006","nombre_de_la_autoparte":"Batería","stock":60,"fecha_de_alta":"2023-01-25","descripcion":"Batería de 12V para coches eléctricos"},{"codigo_de_articulo":"A1007","nombre_de_la_autoparte":"Radiador","stock":40,"fecha_de_alta":"2023-04-10","descripcion":"Radiador de aluminio para autos deportivos"},{"codigo_de_articulo":"A1008","nombre_de_la_autoparte":"Amortiguador","stock":120,"fecha_de_alta":"2023-03-22","descripcion":"Amortiguador trasero para SUV"},{"codigo_de_articulo":"A1009","nombre_de_la_autoparte":"Correa de Distribución","stock":70,"fecha_de_alta":"2023-02-01","descripcion":"Correa de distribución para motores de alta potencia"},{"codigo_de_articulo":"A1010","nombre_de_la_autoparte":"Alternador","stock":90,"fecha_de_alta":"2023-05-14","descripcion":"Alternador de alto rendimiento para camiones"},{"codigo_de_articulo":"A1011","nombre_de_la_autoparte":"Claxon","stock":180,"fecha_de_alta":"2023-04-28","descripcion":"Claxon eléctrico para coches compactos"},{"codigo_de_articulo":"A1012","nombre_de_la_autoparte":"Filtro de Combustible","stock":130,"fecha_de_alta":"2023-01-08","descripcion":"Filtro de combustible para motores a diésel"},{"codigo_de_articulo":"A1013","nombre_de_la_autoparte":"Luz Trasera","stock":75,"fecha_de_alta":"2023-03-30","descripcion":"Luz trasera LED para vehículos sedán"},{"codigo_de_articulo":"A1014","nombre_de_la_autoparte":"Espejo Lateral","stock":110,"fecha_de_alta":"2023-02-25","descripcion":"Espejo lateral con ajuste eléctrico para SUV"},{"codigo_de_articulo":"A1015","nombre_de_la_autoparte":"Parachoques Delantero","stock":50,"fecha_de_alta":"2023-04-15","descripcion":"Parachoques delantero reforzado para camionetas"},{"codigo_de_articulo":"A1016","nombre_de_la_autoparte":"Limpiaparabrisas","stock":210,"fecha_de_alta":"2023-01-05","descripcion":"Limpiaparabrisas de goma para todo tipo de vehículos"},{"codigo_de_articulo":"A1017","nombre_de_la_autoparte":"Embrague","stock":65,"fecha_de_alta":"2023-05-02","descripcion":"Kit de embrague para vehículos compactos"},{"codigo_de_articulo":"A1018","nombre_de_la_autoparte":"Motor de Arranque","stock":85,"fecha_de_alta":"2023-03-18","descripcion":"Motor de arranque para motores de gasolina"},{"codigo_de_articulo":"A1019","nombre_de_la_autoparte":"Catalizador","stock":55,"fecha_de_alta":"2023-02-10","descripcion":"Catalizador de emisiones para vehículos diésel"},{"codigo_de_articulo":"A1020","nombre_de_la_autoparte":"Sensor de Oxígeno","stock":95,"fecha_de_alta":"2023-05-10","descripcion":"Sensor de oxígeno para sistemas de escape"}]}';

var repuestos = JSON.parse(json);

$(document).ready(function () {
  $("#carga").click(function creaTabla() {
    repuestos.repuestos.forEach(function (valor) {
      var objFila = document.createElement("tr");

      var celda1 = document.createElement("td");
      celda1.innerHTML = valor.codigo_de_articulo;
      objFila.appendChild(celda1);

      var celda2 = document.createElement("td");
      celda2.innerHTML = valor.nombre_de_la_autoparte;
      objFila.appendChild(celda2);

      var celda3 = document.createElement("td");
      celda3.innerHTML = valor.stock;
      objFila.appendChild(celda3);

      var celda4 = document.createElement("td");
      celda4.innerHTML = valor.fecha_de_alta;
      objFila.appendChild(celda4);

      var celda5 = document.createElement("td");
      celda5.innerHTML = valor.descripcion;
      objFila.appendChild(celda5);

      $("#tabla").append(objFila);
    });
  });

  $("#vaciar").click(function () {
    $("#tabla").empty();
  });
});
