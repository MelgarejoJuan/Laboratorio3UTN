document.getElementById("crear").addEventListener("click", function () {
  var nuevoDiv = document.createElement("div");

  var textoHtml = "<h1>Elemento creado: ";

  textoHtml =
    textoHtml + document.getElementById("conteiner").childNodes.length;

  textoHtml = textoHtml + "</h1>";

  nuevoDiv.className = "clase-objeto-dinamico";

  nuevoDiv.innerHTML = textoHtml;

  document.getElementById("conteiner").appendChild(nuevoDiv);
});

document.getElementById("borrar").addEventListener("click", function () {
  while (document.getElementById("conteiner").childNodes.length > 0) {
    document
      .getElementById("conteiner")
      .removeChild(document.getElementById("conteiner").childNodes[0]);
  }
});

document.getElementById("info").addEventListener("click", function () {
  alert(
    "Longitud del array childNodes: " +
      document.getElementById("conteiner").childNodes.length
  );
});
