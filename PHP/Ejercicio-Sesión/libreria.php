<?php
function autenticacion($arg1,$arg2) {
	
	$usuario = $arg1;
	$clave = $arg2;	
	$salida = "";

	include("./conexion.php");

	try {
		$dsn = "mysql:host=$host;dbname=$dbname";
		$dbh = new PDO($dsn, $user);
	} catch (PDOException $e) {
		$e->getMessage();
	}

	$sql="SELECT * FROM login_info WHERE user=:user";

	$stmt = $dbh->prepare($sql);

	$stmt->bindParam(':user', $usuario);

	$stmt->execute();

	$fila = $stmt->fetch();

	if (($fila['user']==$usuario)&&($fila['user']<>"")) {
		$salida = $salida . "Usuario correcto\n";
		if ($fila['password']==$clave) {
			$ok=true;
		}
		else {
			$ok=false;
			$salida = $salida . "Contraseña incorrecta\n";
		}
	}

	else {
		$salida = $salida . "Usuario NO existente\n";	
	}

	$salida = $salida . "FIN\n";

	return $ok;
}	

function datosDeSesion() {
	
	echo "<h1 style='font-size: 36px;'>Datos de Sesión</h1>";

	echo "<div style='border-style:solid;border-width:thin;padding:20px; height: 300px;'>";	
	echo "<h1>Información de Sesión</h1>";
	echo "<h2> Identificativo de sesión: " . $_SESSION['id'] . "</h2>";
	echo "<h2> Login de usuario: " . $_SESSION['login'] . "</h2>";
	echo "<h2> Contador de sesión: " . $_SESSION['contLogin'] . "</h2>";
	echo "</div>";
}

?>