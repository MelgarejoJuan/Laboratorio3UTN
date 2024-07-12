<?php
function autenticacion($arg1,$arg2) {
	
	$usuario = $arg1;
	$clave = $arg2;
	//$claveEncriptada = hash("sha256",trim($_POST['clave']));

 	$salidaParaLog = "salida para log desde adentro de función autenticacion()*** <br />";   
 	$salidaParaLog = $salidaParaLog . "Fecha: " . date('dmy') . "<br />";
	$salidaParaLog = $salidaParaLog . "login ingresado por el usuario:" . $usuario . "<br />";
	$salidaParaLog = $salidaParaLog . "clave ingresada por el usuario: " . $clave . "<br />";
	//$salidaParaLog = $salidaParaLog . "clave ingresada por el usuario encriptada: " . $claveEncriptada . "<br />";


	

	include("./conexion.php");

	try {
		$dsn = "mysql:host=$host;dbname=$dbname";
		$dbh = new PDO($dsn, $user);	/*Database Handle*/
		$salidaParaLog = $salidaParaLog .  "\nconexion exitosa";
	} catch (PDOException $e) {
		$salidaParaLog = $salidaParaLog . "\n" . $e->getMessage();
	}

	$sql="SELECT * FROM login_info WHERE user=:user";

	$stmt = $dbh->prepare($sql);

	$stmt->bindParam(':user', $usuario);

	$stmt->execute();

	$fila = $stmt->fetch();

	if (($fila['user']==$usuario)&&($fila['user']<>"")) {
		$salidaParaLog = $salidaParaLog . "Usuario correcto\n";
		if ($fila['password']==$clave) {
			$Aceptado=true;
		}
		else {
			$Aceptado=false;
			$salidaParaLog = $salidaParaLog . "Contraseña incorrecta\n";
		}
	}

	else {
		$salidaParaLog = $salidaParaLog . "Usuario NO existente\n";	
	}

	$salidaParaLog = $salidaParaLog . "***Fin texto por consola la función autenticacion()***\n\n";

	return $Aceptado;
}	




function datosDeSesion() {
	
	echo "<h1 style='font-size: 36px;'>Datos de Sesión</h1>";

	echo "<div style='border-style:solid;border-width:thin;padding:20px; height: 300px;'>";	
	echo "<h1>Información de Sesión</h1>";
	echo "<h2> Identificativo de sesión: " . $_SESSION['identificativo'] . "</h2>";
	echo "<h2> Login de usuario: " . $_SESSION['login'] . "</h2>";
	echo "<h2> Contador de sesión: " . $_SESSION['contLogin'] . "</h2>";

	echo "</div>";
}

?>