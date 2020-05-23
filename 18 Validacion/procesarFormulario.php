<?php
   $error = 'faltan_valores';
    if(empty($_POST['nombre'])&&empty($_POST['apellidos'])
       &&empty($_POST['edad'])&&empty($_POST['email'])&&empty($_POST['pass'])){
        
       $error = 'faltan_valores';
        
    }else{
        $error= 'ok';
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $edad = (int)$_POST['edad'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        
        //Validar nombre
        if(!is_string($nombre) || preg_match("/[0-9]/",$nombre)){
            $error = 'nombre';
        }
        //Validar apellidos
        if(!is_string($apellidos) || preg_match("/[0-9]/",$apellidos)){
            $error = 'apellidos';
        }
        //Validar Edad
        if(!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)){
            $error = 'edad';
        }
        //Validar Email
        if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
            $error = 'email';
        }
        //Validar Password
        if(empty($pass) || strlen($pass)<5){
            $error = 'password';
        }
    }
    if($error != 'ok'){
        header("Location:index.php?error=$error");
    }
?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Validacion de fomrularios</title>
    </head>
    <body>
        <?php
            if($error == 'ok'){
                echo '<h1>Datos Validados</h1>';
                echo '<p>'.$nombre.'</p>';
                echo '<p>'.$apellidos.'</p>';
                echo '<p>'.$edad.'</p>';
                echo '<p>'.$email.'</p>';
            }
        ?>
    </body>
</html>

