<?php 
session_start();

function redirect($url) {
	header('Location: ' . $url);
	exit;
}

$conn = new mysqli('localhost', 'root', '', 'prueba1');

if($conn->connect_error) {
	echo 'Existió un error en la conexión ' . $conn->connect_error;
	exit;
}

if ($_SERVER['SCRIPT_NAME'] != '/Prueba2/index.php' && $_SERVER['SCRIPT_NAME'] != '/Prueba2/php/process_registration.php' && !isset($_SESSION['user'])) {
	redirect($_SERVER["HTTP_HOST"] . 'Prueba2/index.php');
} elseif( $_SERVER['SCRIPT_NAME'] == '/Prueba2/index.php' && isset($_SESSION['user']) ) {

	redirect($_SERVER["HTTP_HOST"] . 'Prueba2/index.php');
}