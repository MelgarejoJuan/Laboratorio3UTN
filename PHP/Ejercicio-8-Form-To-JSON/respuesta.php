<?php

sleep(3);

    $objProveedor = new stdclass;

    $objProveedor -> codigoArt = $_GET['codigo'];
    $objProveedor -> descripcion = $_GET['descripcion'];
    $objProveedor -> stock = $_GET['stock'];
    $objProveedor -> TipodePieza = $_GET['pieza'];
    $objProveedor -> fechaAlta = $_GET['fecha'];

    $jsonArt = json_encode($objProveedor);

    echo $jsonArt;

?>