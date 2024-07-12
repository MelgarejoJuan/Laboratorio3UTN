<?php

include('./conexion.php');
//sleep(2);

$orden = $_GET['orden'];
$f_numSerie = $_GET['filtro_num_serie'];
$f_detalle = $_GET['filtro_detalle'];
$f_costoComp = $_GET['filtro_costo'];
$f_costoManoObra = $_GET['filtro_mano_obra'];
$f_fechaAlta = $_GET['filtro_fecha'];
if($_GET['filtro_marca'] == "Nvidia"){
    $f_codMarca = "Nv";
}elseif($_GET['filtro_marca'] == "AMD"){
    $f_codMarca = "Am";
}elseif($_GET['filtro_marca'] == "Intel"){
    $f_codMarca = "In";
}else{
    $f_codMarca = "";
}

try{

    $sql = "SELECT * FROM componentes WHERE ";
    $sql=$sql . "numSerie LIKE CONCAT('%',:numSerie,'%') AND ";//ojo con espacios antes y despues del and
    $sql=$sql . "detalle LIKE CONCAT('%',:detalle,'%') AND ";
    $sql=$sql . "costoComp LIKE CONCAT('%',:costoComp,'%') AND ";
    $sql=$sql . "costoManoObra LIKE CONCAT('%',:costoManoObra,'%') AND ";
    $sql=$sql . "fechaAlta LIKE CONCAT('%',:fechaAlta,'%') AND ";
    $sql=$sql . "codMarca LIKE CONCAT('%',:codMarca,'%')";
    $sql=$sql . " ORDER BY $orden";

    $stmt = $dbh -> prepare($sql);

    $stmt->bindParam(':numSerie', $f_numSerie);
    $stmt->bindParam(':detalle', $f_detalle);
    $stmt->bindParam(':costoComp', $f_costoComp);
    $stmt->bindParam(':costoManoObra', $f_costoManoObra);
    $stmt->bindParam(':fechaAlta', $f_fechaAlta);
    $stmt->bindParam(':codMarca', $f_codMarca);

    $stmt -> setFetchMode(PDO::FETCH_ASSOC);
    $stmt -> execute();

}catch(PDOException $e){
    $respuesta_estado = $respuesta_estado . "\n" . $e -> getMessage();
}

$componentes= [];

while($fila = $stmt -> fetch()){
    $objComponente = new stdClass();
    $objComponente->numSerie=$fila['numSerie'];
    $objComponente->detalle=$fila['detalle'];
    $objComponente->costoComp=$fila['costoComp'];
    $objComponente->costoManoObra=$fila['costoManoObra'];
    $objComponente->fechaAlta=$fila['fechaAlta'];
    $objComponente->codMarca=$fila['codMarca'];

    array_push($componentes, $objComponente);
}

$objComponentes = new stdClass();
$objComponentes->componentes=$componentes;
$objComponentes->cuenta=count($componentes);


$salidaJSON = json_encode($objComponentes);

$dbh = null;

echo $salidaJSON;

?>