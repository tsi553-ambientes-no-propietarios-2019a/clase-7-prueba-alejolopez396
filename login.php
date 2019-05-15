<?php
//include('common/utils.php')
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
    <form action="index.php" method="post">
    	 <button>Registrar mi tienda</button>
    </form>
</body>
</html>
