<?php

    //Variables super globales de servidor
    echo '<h1>';
    echo $_SERVER['SERVER_ADDR'].'<br>'; //muestra la direccion del servidor
    echo $_SERVER['SERVER_NAME'].'<br>'; //muestra el nombre de dominio
    echo $_SERVER['SERVER_SOFTWARE'].'<br>'; //muestra el software del servidor
    echo $_SERVER['HTTP_USER_AGENT'].'<br>'; //muestra el navegador que se esta usando
    echo $_SERVER['REMOTE_ADDR']; //Muestra ip del cliente
    
    //mas en la documentacion de php
    echo '</h1>';

