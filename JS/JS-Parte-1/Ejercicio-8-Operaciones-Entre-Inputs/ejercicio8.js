var entrada1 = document.getElementById("entrada1");
var entrada2 = document.getElementById("entrada2");
var entrada3 = document.getElementById("entrada3");
var result = document.getElementById("result");

document.getElementById("suma").addEventListener("click", function () {
  const parsed1 = parseInt(entrada1.value);
  const parsed2 = parseInt(entrada2.value);
  const parsed3 = parseInt(entrada3.value);

  result.value = parsed1 + parsed2 + parsed3;
});

document.getElementById("prom").addEventListener("click", function () {
  const parsed1 = parseFloat(entrada1.value);
  const parsed2 = parseFloat(entrada2.value);
  const parsed3 = parseFloat(entrada3.value);

  result.value = (parsed1 + parsed2 + parsed3) / 3;
});

document.getElementById("mayor").addEventListener("click", function () {
  const parsed1 = parseFloat(entrada1.value);
  const parsed2 = parseFloat(entrada2.value);
  const parsed3 = parseFloat(entrada3.value);

  if (parsed1 > parsed2 && parsed1 > parsed3) result.value = parsed1;
  else if (parsed2 > parsed1 && parsed2 > parsed3) result.value = parsed2;
  else result.value = parsed3;
});
