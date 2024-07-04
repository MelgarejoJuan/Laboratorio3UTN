<?php

include("./conexion.php");


$numSerie = $_POST["numSerie"];
$detalle = $_POST["detalle"];
$costComp = $_POST["costComp"];
$costoManoObra = $_POST["costoManoObra"];
$fechaAlta = $_POST["fechaAlta"];
$codMarca = $_POST["codMarca"];

$respuesta_estado=$respuesta_estado . "\nRespuesta del servidor al alta. Entradas recibidas en el req http:";
$respuesta_estado=$respuesta_estado . "\nNúmero de serie: " . $numSerie;
$respuesta_estado=$respuesta_estado . "\nMarca: " . $codMarca;


try {

$sql = "INSERT INTO componentes (numSerie,detalle,costComp,costoManoObra,fechaAlta,codMarca)";
$sql = $sql . "values(:numSerie,:detalle,:costComp,:costoManoObra,:fechaAlta,:codMarca);";

$stmt = $dbh->prepare($sql);
$respuesta_estado = $respuesta_estado . "\nPreparacion exitosa!";
echo $respuesta_estado;

} catch (PDOException $e) {

$respuesta_estado = $respuesta_estado . "\n" . $e->getMessage();

}
try {

    $stmt->bindParam(':numSerie', $numSerie);
    $stmt->bindParam(':detalle', $detalle);
    $stmt->bindParam(':costoComp', $costComp);
    $stmt->bindParam(':costoManoObra', $costoManoObra);
    $stmt->bindParam(':fechaAlta', $fechaAlta);
    $stmt->bindParam(':codMarca', $codMarca);

$respuesta_estado = $respuesta_estado . "\nBinding exitoso!";

echo $respuesta_estado;

} catch (PDOException $e) {

$respuesta_estado = $respuesta_estado . "\n" . $e->getMessage();

}
try {

$stmt -> setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
$respuesta_estado = $respuesta_estado . "\nEjecucion exitosa!";
echo $respuesta_estado;

} catch (PDOException $e) {

$respuesta_estado = $respuesta_estado . "\n" . $e->getMessage();

}

?>