<?php 
require '../../includes/funciones.php';

$bd = conectar_db();

$errores =  [];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $nrodoc = $_POST['nrodoc'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];

        if(!$nrodoc){
            $errores[] = 'El número de identificación es obligatorio';
        }
        if(!$nombre){
            $errores[] = 'El primer apellido es obligatorio';
        }
        if(!$apellido){
            $errores[] = 'El nombre es obligatorio';
        }
        if(!$correo){
            $errores[] = 'El correo es obligatorio';
        }
        
        if(empty($errores)){
        
            $sql = "INSERT INTO usuario(nrodoc, nombre, apellido, telefono, email) 
            VALUES ('$nrodoc', '$nombre', '$apellido', '$telefono', '$email')" ;

            echo $sql;

            $resultado = mysqli_query($bd, $sql);

            if($resultado){
                header('location: ../../index.php');

            }
            }
            else{
                foreach($errores as $error){
                    echo '<br>' . $error;
                }
            }
        }        
?>
<div>
    <p>Cliente nuevo</p>

    <a href="../../index.php">Regresar</a>

    <form class="formulario" method="POST" action="crear.php">
        <fieldset>
            <legend>Datos</legend>
            <label for="nrodoc">No. Documento</label><br>
            <input type="text" id="nrodoc" name="nrodoc"><br>

            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre"><br>

            <label for="apellido">Apellido:</label><br>
            <input type="text" id="apellido" name="apellido" ><br>

            <label for="telefono">Telefono:</label><br>
            <input type="number" id="telefono" name="telefono" ><br>

            <label for="correo">Email:</label><br>
            <input type="mail" id="correo" name="correo" ><br>

            <input type="submit" id="enviar" name="enviar" value="Enviar datos">
        </fieldset>
        
    </form>

</div>

