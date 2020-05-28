<?php
/*
Funcion que valide un email con filter_var recogiendo una variable por get y validarla
mostrar el resultado al final
*/

function validar($email){
    $status = "No Valido";
    if(!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)){
        $status = "Valido";
    }
    return $status;
}

if(isset($_GET['email'])){
    echo validar($_GET['email']);
}else{
    echo 'Pasa por get un email';
}

?>