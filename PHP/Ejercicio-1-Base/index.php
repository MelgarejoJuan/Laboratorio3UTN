<!DOCTYPE html>

<head>
  <title>Ejercicio 1 - Base</title>
  <meta charset="UTF-8" />
</head>

<html>
  <main>
  
    <h2>Todo lo escrito fuera de las marcas de PHP es entregado en la respuesta http sin pasar por el procesador PHP</h2>
    <?php
    $mivariable = "valor1";
    echo "
    <br>
    <hr>
    <h2>Todo texto y/o HTML <span style= 'color: blue'>entregado por el procesador php</span> usando la sentencia echo.</h2>
    <br>
    <hr>
    <h3>Sin usar concatenador <span style= 'color: blue'>\$mivariable</span> : $mivariable </h3>
    <h3>Usando concatenador <span style= 'color: blue'>\$mivariable : </span>" . $mivariable . "</h3>";
    $mivariable = true;
    echo "<hr>";
    echo "<h3>Variable tipo boolean o logicas (verdadero) <span style= 'color: blue'>\$mivariable</span> : $mivariable </h3>";
    $mivariable = false;
    echo "<h3>Variable tipo boolean o logicas (falso) <span style= 'color: blue'>\$mivariable</span> : $mivariable </h3>";
    echo "<hr>";

    define("miConstante", "valorConstante");
    echo "<h3><span style= 'color: blue'>miConstante</span> : " . miConstante ."</h3>";
    echo "<h3>Tipo de <span style= 'color: blue'>miConstante</span> : " . gettype(miConstante) ."</h3>";
    echo "<hr>";

    echo "<h2>Arreglos</h2>";
    $aPalabra = ["hola","hello"];
    echo "<h3><span style= 'color: blue'>\$aPalabra[0]</span> : " . $aPalabra[0] ."</h3>"; 
    echo "<h3><span style= 'color: blue'>\$aPalabra[1]</span> : " . $aPalabra[1] ."</h3>"; 
    echo "<h3>Tipo de <span style= 'color: blue'>\$aPalabra</span> : " . gettype($aPalabra) ."</h3>";
    echo "<h3>Se agregan por programa dos elementos nuevos</h3>";
    array_push($aPalabra, "chao", "sayonara");
    echo "<h2>Todos los elementos originales y nuevos</h2>";
    echo "<ul>";
    foreach($aPalabra as $palabra){
      echo "<li>" . $palabra . "</li>";
    };
    echo "</ul>";
    echo "<h2>Arreglo de dos dimensiones (diccionario)</h2>";
    $aNombresLatinos = ["Jose","Marcos"];
    $aNombresAngloSajones=["Harry","Jack"]; 
    $aNombresChinos=["Kun","Yan"];
    $aNombres = [$aNombresAngloSajones, $aNombresLatinos, $aNombresChinos];
    echo "<h3>Tipo de <span style= 'color: blue'>\$aNombres</span> : " . gettype($aNombres) ."</h3>";
    echo "<table style='border: solid; border-collapse: collapse'>
      <thead>
        <th>Ingles</th>
        <th>Latino</th>
        <th>Chino</th>
      </thead>
      <tbody>
        <tr>
          <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>" . $aNombres[0][0] . "</td>
          <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>" . $aNombres[1][0] . "</td>
          <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>" . $aNombres[2][0] . "</td>
        </tr>
        <tr>
          <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>" . $aNombres[0][1] . "</td>
          <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>" . $aNombres[1][1] . "</td>
          <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>" . $aNombres[2][1] . "</td>
        </tr>
      </tbody>
    </table>";
    echo "<h3>Tambien asi se puede expresar el valor de <span style= 'color: blue'>\$aNombres[1][1]</span> : " . $aNombres[1][1] ."</h3>"; 
    echo "<h3>Cantidad de elementos en <span style= 'color: blue'>\$aNombres</span> : " . count($aNombres) ."</h3>";

    echo "<h2>Variables de tipo arreglo asociativo</h2>";

    $renglonDeRepuesto = ["nombre"=>"Disco de freno", "valor"=>25000, "fechaIngreso"=>"08/12/2023"];

    echo "<h4>" . $renglonDeRepuesto['nombre'] ."</h4>";
    echo "<h4>" . $renglonDeRepuesto['valor'] ."</h4>";
    echo "<h4>" . $renglonDeRepuesto['fechaIngreso'] ."</h4>";
    echo "<h4>Cantidad de elementos en <span style= 'color: blue'>\$renglonDeRespuesto</span> : " . count($renglonDeRepuesto) ."</h4>";
    echo "<h4>Tipo de dato de <span style= 'color: blue'>\$renglonDeRespuesto</span> : " . gettype($renglonDeRepuesto) ."</h4>";

    echo "<h2>Expresiones aritmeticas</h2>";

    $x = 4;
    $y = 5.6;
    $suma = ($x + $y);
    $producto = ($x * $y);
    $division = ($x / $y);

    echo "<h3>La variable <span style= 'color: blue'>\$x</span> tiene el siguiente valor: " . $x ."</h3>";
    echo "<h3>La variable <span style= 'color: blue'>\$y</span> tiene el siguiente valor: " . $y ."</h3>";
    echo "<h3>La variable <span style= 'color: blue'>\$x</span> tiene el siguiente tipo: " . gettype($x) ."</h3>";
    echo "<h3>La variable <span style= 'color: blue'>\$y</span> tiene el siguiente tipo: " . gettype($y) ."</h3>";
    echo "<h3>Asi se imprime una expresión aritmetica de <span style= 'color: blue'>Suma</span>(\$x + \$y): " . $suma ."</h3>";
    echo "<h3>Asi se imprime una expresión aritmetica de <span style= 'color: blue'>Multiplicación</span>(\$x * \$y): " . $producto ."</h3>";
    echo "<h3>Asi se imprime una expresión aritmetica de <span style= 'color: blue'>División</span>(\$x / \$y): " . $division ."</h3>";
    ?>

  </main>
</html>