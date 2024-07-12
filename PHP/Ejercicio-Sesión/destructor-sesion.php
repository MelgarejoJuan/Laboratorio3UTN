<?php
include('./controlador-sesion.php');
session_destroy();
header('location:./formulario-ingreso.html');
?>