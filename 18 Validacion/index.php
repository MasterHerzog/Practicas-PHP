<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Validacion de fomrularios</title>
    </head>
    <body>
        <h1>Validar formularios en PHP</h1>
        <?php
            if(isset($_GET['error'])){
                $error = $_GET['error'];
                if($error == 'faltan_datos'){
                    echo '<strong style="color:red">Introduce correctamente los datos</strong>';
                }elseif( $error = 'nombre'){
                    echo '<strong style="color:red">Introduce correctamente el nombre</strong>';
                }elseif( $error = 'apellidos'){
                    echo '<strong style="color:red">Introduce correctamente los apellidos</strong>';
                }elseif( $error = 'edad'){
                    echo '<strong style="color:red">Introduce correctamente la edad</strong>';
                }elseif( $error = 'email'){
                    echo '<strong style="color:red">Introduce correctamente el correo</strong>';
                }else{
                    $error = '<strong style="color:red">Error</strong>';
                }
            }
        ?>
        <form method="POST" action="procesarFormulario.php">
            <label for="nombre">Nombre: </label>
            <p><input type="text" name="nombre" required pattern="[A-Za-z]+"/></p>
            <label for="apellidos">Apellidos: </label>
            <p><input type="text" name="apellidos" required pattern="[A-Za-z]+"/></p>
            <label for="edad">Edad: </label>
            <p><input type="number" name="edad" required pattern="[0-9]+"/></p>
            <label for="email">email: </label>
            <p><input type="email" name="email" required/></p>
            <label for="pass">Contraseña: </label>
            <p><input type="password" name="pass" required/></p>
            <p><input type="submit" value="Enviar"/></p>
        </form>
    </body>
</html>