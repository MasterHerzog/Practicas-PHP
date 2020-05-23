<?php

//Eliminar cookie
if(isset($_COOKIE['miCookie'])){
    unset($_COOKIE['miCookie']);
    setcookie('miCookie','',-1);
}

header('Location:verCookies.php');