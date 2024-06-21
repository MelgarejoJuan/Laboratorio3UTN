<!DOCTYPE html>

<head>
  <title>Ejercicio 4 - Variables de Tipo Objeto</title>
  <meta charset="UTF-8" />
</head>

<html>
  <main>

    <?php

    echo "<h1>Variables de Tipo Objeto en PHP. Objeto renglon de Repuesto</h1>";

    $objRenglonDeRespuestos = new stdclass;
    $objRenglonDeRespuestos -> nombre = "Frenos";
    $objRenglonDeRespuestos -> valor = 25000;
    $objRenglonDeRespuestos -> fechaIngreso = "08/12/2023";

    echo "<h2><span style= 'color: blue'>\$objRenglonDeRespuestos</span></h2>";

    echo "<h3>Nombre: " . $objRenglonDeRespuestos->nombre . "</h3>";
    echo "<h3>Precio: " . $objRenglonDeRespuestos->valor . "</h3>";
    echo "<h3>Fecha de Ingreso: " . $objRenglonDeRespuestos->fechaIngreso . "</h3>";

    echo "<h3>Tipo de <span style= 'color: blue'>\$objRenglonDeRespuestos</span>: " . gettype($objRenglonDeRespuestos) . "</h3>";

    echo "<h1>Se define un arreglo de repuestos</h1>";

    $aRenglonesRepuestos = [];
    array_push($aRenglonesRepuestos, $objRenglonDeRespuestos);

    $objRenglonDeRespuestos2 = new stdclass;
    $objRenglonDeRespuestos2 -> nombre = "Bateria";
    $objRenglonDeRespuestos2 -> valor = 30000;
    $objRenglonDeRespuestos2 -> fechaIngreso = "23/02/2024";

    array_push($aRenglonesRepuestos, $objRenglonDeRespuestos2);

    echo "<h2><span style= 'color: blue'>\$aRenglonesRepuestos</span></h2>";
    echo "<h2>Tabula <span style= 'color: blue'>\$aRenglonesRepuestos</span>. Se recorre el arreglo de renglones y se tabulan en html</h2>";

    foreach($aRenglonesRepuestos as $objRenglonDeRespuestos){

        echo "<h3>Nombre: " . $objRenglonDeRespuestos->nombre . ", Precio: " . $objRenglonDeRespuestos->valor . ", Fecha de Ingreso: ". $objRenglonDeRespuestos->fechaIngreso . "</h3>";

    };

    echo "<h3>Cantidad de renglones: " . count($aRenglonesRepuestos) . "</h3>";

    echo "<h1>Produccion de un objeto <span style= 'color: blue'>\$objRenglonesRepuestos</span> con dos atributos array renglonesRepuestos y cantidadDeRenglones</h2>";
    
    $objRenglonesRepuestos = new stdclass;
    $objRenglonesRepuestos -> renglonesRespuestos = $aRenglonesRepuestos;
    $objRenglonesRepuestos -> cantidadDeRenglones = count($aRenglonesRepuestos);

    echo "<h3>Cantidad de renglones: " . $objRenglonesRepuestos -> cantidadDeRenglones . "</h3>";

    echo "<h1>Produccion de un JSON jsonRenglones</h1>";

    $jsonRenglonesPedido = json_encode($objRenglonesRepuestos);

    echo "<h3>" . $jsonRenglonesPedido . "</h3>";

    ?>

  </main>
</html>