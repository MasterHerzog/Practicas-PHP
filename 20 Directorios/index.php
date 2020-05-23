<?php

if(!is_dir('mi Carpeta')){
    mkdir('mi Carpeta',0777) or die('Error al crear la carpeta');
}else{
    echo 'Ya existe la carpeta';
}