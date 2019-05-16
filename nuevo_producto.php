<?php 
session_start();
error_reporting(0);
$usuario = $_SESSION['user']['username'];
if($usuario == null || $usuario == ''){
    header('Location: ../index.php');
    exit;
}
if($_GET){
    if(isset($_GET['error_message3'])){
        $error_message3 = $_GET ['error_message3'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Nuevo Producto</title>
</head>
<body>

                
                <h1>Registro de producto</h1>
                <br>
                <form action="process_registration_producto.php" method="POST" enctype="multipart/form-data">
                    <div>
                            <label>Codigo:</label>
                            <input type="text" name="txtCodigo" 
                            placeholder="Codigo" required>
                    </div>
                    <br>
                    <div >
                            <label>Nombre:</label>
                            <input type="text" name="txtNombre" 
                            placeholder="Nombre" required>
                    </div>
                    <br>
                    <div >
                            <label>Tipo:</label>
                                <select class="custom-select form-control" id="inputGroupSelect01" name="tipo" required>
                                    <option value="">Seleccione</option>
                                    <option value="Alimento">Alimento</option>
                                    <option value="Vestimenta">Vestimenta</option>
                                    <option value="Salud">Salud</option>
                                </select>
                    </div>
                     <br>
                    <div>
                            <label>Cantidad:</label>
                            <input type="text" name="txtStock" 
                            placeholder="Cantidad Producto" required>
                    </div>
                     <br>
                    <div>
                            <label>Precio:</label>
                            <input type="text" name="txtPrecio" 
                            placeholder="Precio" required>
                    </div>
                     <br>
               
                    <button type="submit">Registrar</button>
                    <a href="inicio.php">Volver</a>
                   
                    <br>
                    <?php
                    if(isset($error_message3)){
                        echo $error_message3;
                    }
                    ?>
                
                </form>
          
</body>
</html>