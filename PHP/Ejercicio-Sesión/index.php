<?php
session_start();
if (!isset($_SESSION['id'])) { 
    	header('Location:./formulario-ingreso.html');
    	exit; 
}
include('./libreria.php');
echo datosDeSesion();

?>
<br>
<br>

<button id="btnIngresar" style="background-color: rgb(35, 128, 130); color: #fff; border: none; padding: 10px 20px; border-radius: 2px; cursor: pointer;">Ingresar</button>
<button id="btnCerrar" style="background-color: rgb(35, 128, 130); color: #fff; border: none; padding: 10px 20px; border-radius: 2px; cursor: pointer;">Cerrar Sesión</button>

<script>
document.getElementById("btnIngresar").onclick=function(){
	location.href="./app-modulo-1";
}

document.getElementById("btnCerrar").onclick=function(){
	location.href="./destructor-sesion.php";
}
</script>