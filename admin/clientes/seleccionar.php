<?php

require '../../includes/funciones.php';

$bd = conectar_db();

$consulta = "SELECT * FROM usuario";

$resultado_consulta = mysqli_query($bd, $consulta);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Clientes</title>
</head>
<body>
<h3>Gestion de clientes - Consultar</h3>  

<table>
    <th>
        <tr>
            <td>nrodoc</td>
            <td>nombre</td>
            <td>apellido</td>
            <td>telefono</td>
            <td>email</td>
        </tr> 
    </th>
    <?php 
    
    ?>
    <?php while($usuario = mysqli_fetch_assoc($resultado_consulta)){?>
    <tr>
        <td> <?php echo $usuario['nrodoc'];?> </td>
        <td> <?php echo $usuario['nombre'];?> </td>
        <td> <?php echo $usuario['apellido'];?> </td>
        <td> <?php echo $usuario['telefono'];?></td>
        <td> <?php echo $usuario['email'];?></td>
        <td>
            <a href="">Eliminar</a>
            <a href="/admin/clientes/actualizar.php?id=<?php echo $usuario['nrodoc'];?>">Actualizar</a>
            <?php } ?>
        </td>
        
        
    </tr>
    <a href="../../index.php">Regresar...</a>
</table>

<?php 

mysqli_close($bd);
?>

</body>
</html>