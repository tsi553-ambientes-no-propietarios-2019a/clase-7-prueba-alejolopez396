<?php
if($_GET) {
$error =$_GET['error_message'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
</head>
<body>
	<h1>Registro de Tiendas</h1>

<?php if(isset($error_message)) { ?>
	<div><strong><?php echo $error_message; ?></strong></div>
<?php } ?>
	<form action="php/process_registration.php" method="post">
		Nombre de tienda: <br />
        <input type="text" name="nombre" required>
        <p>
         Direccion: <br />
        <input type="text" name="direccion" required>
        <p>
        Usuario: <br />
        <input type="text" name="username" required>
        <p>    
		Clave: <br />
        <input type="password" name="password" required>
        <p>
        Confirmar Clave: <br />
        <input type="password" name="confirmarpass" required >
        <p>
		<button>Registrarme!</button>
        <br>
        <?php
        if ($_GET) {
           echo $error;
        }
            
        ?>
	</form>
</body>
</html> 