<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subida de archivos php</title>
</head>
<body>
    <h1>Subir imagenes con PHP</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
    <p><input type="file" name="archivo"/></p>
    <p><input type="submit" value="Enviar"/></p>
    </form>
    <h1>Listado de imagenes</h1>
    <?php
        $gestor = opendir('./images');
        if($gestor):
            while(($image = readdir($gestor)) !== false):
                if($image != '.' && $image != '..'):
                    echo "<p><img src='./images/$image' width='200px'/></p>";
                endif;
            endwhile;
        endif;
    ?>
</body>
</html>