<?php
session_start(); 
include('libreria.php');
include('conexion.php');

$usuario=$_POST['login'];
$contraseña=$_POST['clave'];


if (!isset($_SESSION['id'])) {


	if (!autenticacion($usuario,$contraseña)) { 
		header('Location: ./formulario-ingreso.html');
		exit();
	}

	$_SESSION['id'] = session_create_id();
	$_SESSION['login']=$usuario;	

	try {
		$dsn = "mysql:host=$host;dbname=$dbname";
		$dbh = new PDO($dsn, $user);
	} 
	catch (PDOException $e) {
		$e->getMessage();
	}

	$sql="SELECT * FROM login_info WHERE user=:user";

	$stmt = $dbh->prepare($sql);

	$stmt->setFetchMode(PDO::FETCH_ASSOC);

	$stmt->bindParam(':user', $usuario);

	$stmt->execute();

	$fila = $stmt->fetch();

	$contador = $fila['contLogin'];

	$contador = $contador +1; 
	$_SESSION['contLogin'] = $contador;


$sql="UPDATE login_info set contLogin=:contLogin WHERE user=:user;";

$stmt = $dbh->prepare($sql);

$stmt->bindParam(':user', $usuario);
$stmt->bindParam(':contLogin', $contador);

try {
	$stmt->execute();	
} catch (PDOException $e) {
	$e->getMessage();
}

}

datosDeSesion();
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