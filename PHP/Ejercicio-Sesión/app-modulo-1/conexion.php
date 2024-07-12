<?php

$dbname = "componentes";
$host = "localhost";
$user= "root";
$password = "Lumberjack_1415";
$respuesta_estado = "";

//$dbh = null;

try{
    $dsn = "mysql:host=$host;dbname=$dbname";
    $dbh = new PDO($dsn, $user);
    $respuesta_estado = "Conexion exitosa";
    
}catch(PDOException $e){
    $respuesta_estado = $respuesta_estado . "\n" . $e -> getMessage();
    $dbh = null;
}
?>