<?php
 require 'includes/funciones.php';

 $consulta = obtener_clientes();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Cerberus</title>
    
</head>

<body>
   
    <p>Hotel Cerberus - Registro de clientes</p>
   
    <?php
        
    while($usuario = mysqli_fetch_assoc($consulta)){
            echo $cliente['id'].$cliente['nombres'].$cliente['primer_apellido'].$cliente['correo'].'<br>';
    }
        
    ?>

    <a href="admin/clientes/crear.php">Crear cliente</a>

