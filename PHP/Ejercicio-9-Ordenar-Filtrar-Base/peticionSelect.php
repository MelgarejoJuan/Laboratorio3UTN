<?php

include("./conexion.php");

if($respuesta_estado == "Conexion exitosa"){
    $sql = "SELECT * FROM tabla_marca";
    $stmt = $dbh->prepare($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();

    $opciones = [];

    while($fila = $stmt->fetch()){
        $objOpciones = new stdClass();
        $objOpciones->codmarca = $fila['detalleMarca']; // tiene que ser el campo como esta en la base de datos

        array_push($opciones, $objOpciones);
    }

    $objFinal = new stdClass();
    $objFinal->marca = $opciones;

    $salidaJSON = json_encode($objFinal);

    echo $salidaJSON;

    $dbh = null;
}else{
    echo $respuesta_estado;
}

?>