<?php 
include('../common/utils.php');

if($_POST) {
	if (isset($_POST['nombre']) && isset($_POST['direccion']) && isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {
		
		$nombre = $_POST['nombre'];
		$direccion = $_POST['direccion'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql_insert = "INSERT INTO user
		(NomTienda, Direccion, Usuario, Password)
		VALUES ('$nombre','direccion','$username', MD5('$password'))";

		echo $sql_insert;
		$conn->query($sql_insert);

		if ($conn->error) {
			echo 'Ocurrió un error ' . $conn->error;
		} else {
			redirect('../login.php');
		}
	} else {
		header('Location: ../index.php?error_message=Ingrese todos los datos!');
		exit;
	}
} else {
	header('Location: ../index.php');
	exit;
}