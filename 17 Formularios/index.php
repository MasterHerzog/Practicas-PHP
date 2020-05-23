<!DOCTYPE html>
<html lang='es'>
    <header>
        <meta charset='utf-8'>
    </header>
    <title>Formularios PHP</title>
    <body>
        <h1>Formularios</h1>
        <form action='#' method='POST' enctype='multipart/form-data'>
            <label for="nombre">Nombre: </label>
            <p><input type="text" name="nombre" autofocus/></p>
            <label for="nombre">Apellido: </label>
            <p><input type="text" name="apellido" disabled/></p>
            <label for="email">Email: </label>
            <p><input type="email" name="email"/></p>
            <label for="ciudad">Ciudad: </label>
            <p><input type="text" name="ciudad" pattern="[A-Z ]+" placeholder="[A-Z]"/></p>
            <label for="edad">Edad: </label>
            <p><input type="number" name="edad" required/></p>
            <label for="genero">Genero: </label>
            <p>
                Hombre: <input type="radio" name="genero" value="Hombre" checked/>
                Mujer: <input type="radio" name="genero" value="Mujer"/>
            </p>
            <label for="color">Color: </label>
            <p><input type="color" name="color"/></p>
            <label for="fecha">Fecha: </label>
            <p><input type="date" name="fecha"/></p>
            <label for="archivo">Archivo: </label>
            <p><input type="file" name="archivo" multiple/></p>
            <label for="pass">Contrasena: </label>
            <p><input type="password" name="pass"/></p>
            <label for="web">web: </label>
            <p><input type="url" name="web"/></p>
            Peliculas:
            <p><select name="peliculas">
                <option value="spiderman">Spiderman</option>
                <option value="kungFuPanda">Kung Fu Panda</option>
                <option value="monsterInc">Monster Inc</option>
                <option value="pokemon">Pokemon</option>
                </select></p>
            <label for="boton">Boton</label>
            <p><input type="button" name="boton" value="Click"/></p>
            <input type="submit" value="Enviar"/>
        </form>
    </body>
</html>

