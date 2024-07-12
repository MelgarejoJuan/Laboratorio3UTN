<?php 

include("./conexion.php");

$numSerie = $_GET["numSerie"];


try {

    $sql = "DELETE FROM componentes WHERE numSerie=:numSerie;";
    
    $stmt = $dbh->prepare($sql);
    $respuesta_estado = $respuesta_estado . "\nPreparacion exitosa!";
    echo $respuesta_estado . $numSerie;
    
    } catch (PDOException $e) {
    
    $respuesta_estado = $respuesta_estado . "\n" . $e->getMessage();
    echo $respuesta_estado;

    }
    try {
    
        $stmt->bindParam(':numSerie', $numSerie);
    
    $respuesta_estado = $respuesta_estado . "\nBinding exitoso!";
    
    echo $respuesta_estado;
    
    } catch (PDOException $e) {
    
    $respuesta_estado = $respuesta_estado . "\n" . $e->getMessage();
    echo $respuesta_estado;

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

?>