let a = 4,
  b = 5,
  c;

const suma = (a, b) => {
  c = a + b;
  return c;
};

c = suma(a, b);

document.getElementById("result").innerHTML = c;
