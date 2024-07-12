<?php
session_start(); 
include('libreria.php');
include('conexion.php');

$varLogin=$_POST['login'];
$varClave=$_POST['clave'];

$salidaParaLog = "Salida para log: <br/>";
$salidaParaLog = $salidaParaLog . $varLogin;
$salidaParaLog = $salidaParaLog . "<br />";
$salidaParaLog = $salidaParaLog . $varClave;
$salidaParaLog = $salidaParaLog . "<br />";

if (!isset($_SESSION['identificativo'])) {

	$salidaParaLog = $salidaParaLog . "Usuario se encuentra fuera de sesion, luego pasamos a autenticar:";
	$salidaParaLog = $salidaParaLog . "<br />";

	if (!autenticacion($varLogin,$varClave)) { 
		header('Location: ./formulario-ingreso.html');
		exit();
	}

	$salidaParaLog = $salidaParaLog . "El Usuario fue autenticado";
	$salidaParaLog = $salidaParaLog . "<br />";
	$_SESSION['identificativo'] = session_create_id();
	$_SESSION['login']=$varLogin;	

	try {
		$dsn = "mysql:host=$host;dbname=$dbname";
		$dbh = new PDO($dsn, $user);
		$salidaParaLog = $salidaParaLog .  "<br />conexion exitosa a la base para tomar nro de contador";
	} 
	catch (PDOException $e) {
		$salidaParaLog = $salidaParaLog . "<br />Codigo de error en el acceso a la base para levantar nro de contador" . $e->getMessage();
	}


	$sql="SELECT * FROM login_info WHERE user=:user";

	$stmt = $dbh->prepare($sql);

	$stmt->setFetchMode(PDO::FETCH_ASSOC);

	$stmt->bindParam(':user', $varLogin);

	$stmt->execute();

	$fila = $stmt->fetch();

	$contador = $fila['contLogin'];

	$salidaParaLog = $salidaParaLog .  "<br />Nro de contador: " . $contador;

	$contador = $contador +1; 
	$_SESSION['contLogin'] = $contador;

	$salidaParaLog = $salidaParaLog .  "<br />Nro de contador +1: " . $contador;

$sql="UPDATE login_info set contLogin=:contLogin WHERE user=:user;";

$stmt = $dbh->prepare($sql);

$stmt->bindParam(':user', $varLogin);
$stmt->bindParam(':contLogin', $contador);

try {
	$stmt->execute();	
	$salidaParaLog = $salidaParaLog .  "<br />Nro de contador en la ejecucion: " . $contador;
} catch (PDOException $e) {
	$respuesta_estado = $respuesta_estado . "\n<br />" . $e->getMessage();
}


}

datosDeSesion();
?>
<br>
<br>
<button id="btAppMod1" style="background-color: rgb(35, 128, 130); color: #fff; border: none; padding: 10px 20px; border-radius: 2px; cursor: pointer;">Ingresar</button>
<button id="btAppFinSesion" style="background-color: rgb(35, 128, 130); color: #fff; border: none; padding: 10px 20px; border-radius: 2px; cursor: pointer;">Cerrar Sesión</button>

<script>
document.getElementById("btAppMod1").onclick=function(){
	location.href="./app-modulo-1";
}

document.getElementById("btAppFinSesion").onclick=function(){
	location.href="./destructor-sesion.php";
}
</script>