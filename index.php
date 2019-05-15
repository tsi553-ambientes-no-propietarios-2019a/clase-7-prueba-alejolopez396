<?php
//include('common/utils.php')
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
        <input type="text" name="nombre"/>
        <p>
         Direccion: <br />
        <input type="text" name="direccion"/>
        <p>
        Usuario: <br />
        <input type="text" name="username"/>
        <p>    
		Clave: <br />
        <input type="password" name="password"/>
        <p>
        Confirmar Clave: <br />
        <input type="password" name="password2"  />
        <p>
		<button>Registrarme!</button>
	</form>
</body>
</html>