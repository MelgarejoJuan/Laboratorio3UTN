<?php

include("./conexion.php");

$numSerie = $_POST["numSerie"];

$sql="SELECT pdfAsoc FROM componentes WHERE numSerie = '$numSerie'";

$stmt = $dbh->prepare($sql);

$stmt -> setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();

while($fila = $stmt -> fetch()){
    $objPDF = new stdClass();
    $objPDF->documentoPdf=base64_encode($fila['pdfAsoc']);
}


$salidaJson = json_encode($objPDF,JSON_INVALID_UTF8_SUBSTITUTE);

$dbh = null;

echo $salidaJson;


?>