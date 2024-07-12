<?php
session_start();
if (!isset($_SESSION['identificativo'])) { 
    	header('Location:./formulario-ingreso.html');
    	exit; 
}
include('./libreria.php');
echo infoDeSesion();

?>
<button id="btAppMod1" >Ir a la Aplicación</button>
<button id="btAppFinSesion" >Terminar sesión</button>

<script>
document.getElementById("btAppMod1").onclick=function(){
	location.href="./app-modulo-1";
}

document.getElementById("btAppFinSesion").onclick=function(){
	location.href="./destructor-sesion.php";
}
</script>