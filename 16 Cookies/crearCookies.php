<?php

/*
 * Fichero que se almacena en el pc del usuario con el fin de recordar datos o 
 * rasterar sierta informacion o comportamients 
 */

// Crear cookies
//setcookie("nombre","valor que solo puede ser texto",caducidad, ruta, dominio);

setcookie('miCookie','valor de mi galleta');


//Cookie con expiracion
setcookie('oneYear', 'valor de mi cookie de 365 dias',time()+(60*60*24*365));

?>

<p><a href='verCookies.php'>Ver cookies</a></p>
<p><a href='borrarCookie.php'>Borrar Cookies</a></p>
        