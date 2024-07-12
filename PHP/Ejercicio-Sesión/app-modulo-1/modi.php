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

$respuesta_estado = "";

$respuesta_estado = "Parte Modificacion simple de datos <br />\n";

try {
    $sql = "UPDATE componentes SET detalle = :detalle, costoComp = :costoComp, costoManoObra = :costoManoObra, fechaAlta = :fechaAlta, codMarca = :codMarca WHERE numSerie = :numSerie";
    
    $stmt = $dbh->prepare($sql);
    $respuesta_estado .= "\nPreparación exitosa!";
    $stmt->bindParam(':numSerie', $numSerie);
    $stmt->bindParam(':detalle', $detalle);
    $stmt->bindParam(':costoComp', $costoComp);
    $stmt->bindParam(':costoManoObra', $costoManoObra);
    $stmt->bindParam(':fechaAlta', $fechaAlta);
    $stmt->bindParam(':codMarca', $codMarca);
    
    $respuesta_estado .= "\nBinding exitoso!";
    
    $stmt->execute();
    $respuesta_estado .= "\nEjecución exitosa!";
    $dbh = null;
} catch (PDOException $e) {
    $respuesta_estado .= "\n" . $e->getMessage();
}

echo $respuesta_estado;
?>