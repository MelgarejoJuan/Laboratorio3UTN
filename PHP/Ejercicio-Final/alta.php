<?php

include("./conexion.php");


$numSerie = $_POST["numSerie"];
$detalle = $_POST["detalle"];
$costoComp = $_POST["costoComp"];
$costoManoObra = $_POST["costoManoObra"];
$fechaAlta = $_POST["fechaAlta"];
if($_POST['codMarca'] == "Nvidia"){
    $codMarca = "Nv";
}elseif($_POST['codMarca'] == "AMD"){
    $codMarca = "Am";
}elseif($_POST['codMarca'] == "Intel"){
    $codMarca = "In";
}else{
    $codMarca = "";
}
//$pdf = $_POST["pdf"];

$respuesta_estado=$respuesta_estado . "\nRespuesta del servidor al alta. Entradas recibidas en el req http:";
$respuesta_estado=$respuesta_estado . "\nNúmero de serie: " . $numSerie;
$respuesta_estado=$respuesta_estado . "\nMarca: " . $codMarca;


try {

$sql = "INSERT INTO componentes (numSerie,detalle,costoComp,costoManoObra,fechaAlta,codMarca)";
$sql = $sql . "values(:numSerie,:detalle,:costoComp,:costoManoObra,:fechaAlta,:codMarca);";

$stmt = $dbh->prepare($sql);
$respuesta_estado = $respuesta_estado . "\nPreparacion exitosa!";
echo $respuesta_estado;

} catch (PDOException $e) {

$respuesta_estado = $respuesta_estado . "\n" . $e->getMessage();

}
try {

    $stmt->bindParam(':numSerie', $numSerie);
    $stmt->bindParam(':detalle', $detalle);
    $stmt->bindParam(':costoComp', $costoComp);
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
echo $respuesta_estado;
}

//$numSerie = $dbh->lastInsertId();

/*if(!isset($_FILES['docPDF'])){

    $respuesta_estado = $respuesta_estado . "\nNo se inicializo global $_FILES";

}else{
    if(empty($_FILES['docPDF']['pdf'])){
        $respuesta_estado = $respuesta_estado . "\nNo se ha seleccionado ningun archivo para enviar";
    }else{
        $respuesta_estado = $respuesta_estado . "\nTrae el documento asociado a numSerie: " . $numSerie;
        $contenidoPDF = file_get_contents($_FILES['docPDF']['tmpNamePDF']);
        $sql = "UPDATE componentes SET pdfAsoc=:contenidoPDF WHERE numSerie=:numSerie";

        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':pdfAsoc', $pdf);
        $stmt->execute();
    }
}
$dbh = null;

echo $respuesta_estado;*/
?>