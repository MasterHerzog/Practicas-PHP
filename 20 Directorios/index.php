<?php

if(!is_dir('mi Carpeta')){
    mkdir('mi Carpeta',0777) or die('Error al crear la carpeta');
}else{
    echo 'Ya existe la carpeta';
}

//rmdir('mi Carpeta');
echo '<hr>';
if($gestor = opendir('mi Carpeta')){
    while(false != ($archivo = readdir($gestor))){
        if($archivo != '.' && $archivo != '..'){
            echo $archivo.'<br>';   
        }
    }
}