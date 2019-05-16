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
session_start();
$tiendaID=$_SESSION['user']['id'];
$conn = new mysqli('localhost','root','','pruebab1');
$sql_insert = "SELECT * FROM producto where idTienda=$tiendaID";
$res=$conn->query($sql_insert);
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Tienda</title>
    </head>
    <body>
    
                    <h1 >Bienvenido: <?php echo $_SESSION['user'] ['username']; ?></h1>
                    <h1 >Nombre de la tienda: <?php echo $_SESSION['user'] ['tienda'];?></h1>
                   
                    <h3>Productos de la tienda: </h3>
                    <br>
                    <table class="table table-hover">
                    <tr>
                            <td><b>Codigo</b></td>
                            <td><b>Nombre</b></td>
                            <td><b>Tipo</b></td>
                            <td><b>Stock</b></td>
                            <td><b>Precio</b></td>
                    </tr>

                    <?php
                        while($mostrar = $res-> fetch_assoc()){
                    ?>

                    <tr>
                            <td><?php echo $mostrar['codigo'] ?> </td>
                            <td><?php echo $mostrar['nombre'];?> </td>
                            <td><?php echo $mostrar['tipo'];?> </td>
                            <td><?php echo $mostrar['Stock'];?> </td>
                            <td><?php echo $mostrar['precio'];?> </td>
                    </tr>
                    <?php
                        }
                    ?>

                    </table> 
                    
                        <a href="nuevo_producto.php">Registrar nuevo producto</a>

                        <br>
                
                    <?php
                        if(isset($error_message3)){
                            echo $error_message3;
                        }
                    ?>
                    
                 
    </body>
</html>