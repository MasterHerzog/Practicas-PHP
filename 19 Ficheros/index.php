<?php
/*
//Abrir archivo
$archivo = fopen("fichero_texto.txt","a+");

//Leer contenido
while(!feof($archivo)){
    $contenido = fgets($archivo);
    echo $contenido.'<br>';
}

//Escribir
fwrite($archivo,"Soy un texto agregado desde php");

//Cerrar archivo
fclose($archivo);
fichero_texto.txt

//Copiar
copy('fichero_texto.txt','ficheroCopiado') or die('Error al copiar');

//Renombrar
rename('ficheroCopiado','ficheroRecopiado.txt');


unlink('ficheroRecopiado.txt') or die('Error al borrar');

//Existencia de archivo
if(file_exists('fichero_texto.txt')){
    echo 'El archivo existe';
}else{
    echo 'el archivo no existe';
}

*/