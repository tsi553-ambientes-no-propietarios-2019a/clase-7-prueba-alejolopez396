<?php 


if($_POST) {
	if (isset($_POST['nombre']) && isset($_POST['direccion']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirmarpass'])) {
		
		$nombre = $_POST['nombre'];
		$direccion = $_POST['direccion'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$confirmarpass = $_POST['confirmarpass'];

		if($password == $confirmarpass){

		$conn = new mysqli('localhost', 'root', '', 'pruebab1');
		$sql_insert = "INSERT INTO tienda
		(Nombre_Tienda, Username, Password)
		VALUES ('$nombre','$username', MD5('$password'))";

		$es=$conn->query($sql_insert);

		if ($conn->error) {
			echo 'Ocurrió un error ' . $conn->error;
		} else {
			header('Location: ../index.php?error_message=Tienda registrada exitosamente, puede iniciar sesión');
			exit;
		}
	} else {
		header('Location: ../registro_tienda.php?error_message=Las contraseñas no coinciden!');
		exit;
	}
}
}
