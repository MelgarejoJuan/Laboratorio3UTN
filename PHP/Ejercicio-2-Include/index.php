<!DOCTYPE html>

<head>
  <title>Ejercicio 2 - Include</title>
  <meta charset="UTF-8" />
</head>

<html>
  <main>
  
    <h2>En este ejemplo se utiliza la funcion include() que ubica codigo PHP definido en el archivo index2.inc</h2>
    <h2>Antes de insertar el include las variables declaradas en el mismo no existen:</h2>
    <?php

echo "<table style='border: solid; border-collapse: collapse'>
<thead>
  <th>Nombre</th>
  <th>Valor</th>
  <th>Fecha de Ingreso</th>
</thead>
<tbody>
  <tr>
    <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>" . $aRepuestos[0][0] . "</td>
    <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>" . $aRepuestos[1][0] . "</td>
    <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>" . $aRepuestos[2][0] . "</td>
  </tr>
  <tr>
    <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>" . $aRepuestos[0][1] . "</td>
    <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>" . $aRepuestos[1][1] . "</td>
    <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>" . $aRepuestos[2][1] . "</td>
  </tr>
  <tr>
    <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>" . $aRepuestos[0][2] . "</td>
    <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>" . $aRepuestos[1][2] . "</td>
    <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>" . $aRepuestos[2][2] . "</td>
  </tr>
</tbody>
</table>";


include './index2.php';

echo "<h2>Aqui ya se ejecuto la funcion include(). Cuando se usa un include ocurre que si el archivo '.inc' no existe, se visualiza
un warning y el script sigue ejecutandose hasta el final</h2>";

echo "<table style='border: solid; border-collapse: collapse'>
<thead>
  <th>Nombre</th>
  <th>Valor</th>
  <th>Fecha de Ingreso</th>
</thead>
<tbody>
  <tr>
    <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>" . $aRepuestos[0][0] . "</td>
    <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>" . $aRepuestos[1][0] . "</td>
    <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>" . $aRepuestos[2][0] . "</td>
  </tr>
  <tr>
    <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>" . $aRepuestos[0][1] . "</td>
    <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>" . $aRepuestos[1][1] . "</td>
    <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>" . $aRepuestos[2][1] . "</td>
  </tr>
  <tr>
    <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>" . $aRepuestos[0][2] . "</td>
    <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>" . $aRepuestos[1][2] . "</td>
    <td style='border: solid; width: 140px; height: 30px; background-color: #385c8c; color: white; border-color: black;'>" . $aRepuestos[2][2] . "</td>
  </tr>
</tbody>
</table>";

echo "<h3>Cantidad de elementos en <span style= 'color: blue'>\$aRespuestos</span>: " . count($aRepuestos) ."</h3>";
    ?>

  </main>
</html>