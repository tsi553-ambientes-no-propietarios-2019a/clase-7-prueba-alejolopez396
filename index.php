<?php
if($_GET) {
$confirmacion =$_GET['error_message'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <form action="php/process_login.php" method="post">
    	Usuario: <br />
        <input type="text" name="username" placeholder="ingrese su usuario">
        <p>    
        Clave: <br />
        <input type="password" name="password" placeholder="ingrese su contraseña">
        <p>
        <button>Ingresar</button>
    </form>
    <form action="registro_tienda.php" method="post">
    	 <button>Registrar mi tienda</button>
    	 <br>
    	         
   	<?php
        if ($_GET) {
           echo $confirmacion;
        }
            
        ?>

    </form>
</body>
</html>
