<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio inmobiliaria</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
<h1>Inserción de vivienda</h1>
Introduzca los datos de la vivienda:
<br>
<div class = "formularios">
    <form action="index.php?controller=Inmobiliaria&action=insertar" method="POST" enctype="multipart/form-data">
        <p>
            <label><b>Tipo de vivienda: </b> </label>
            <select name="tipo">
                <option >Piso</option>
                <option >Adosado</option>
                <option >Chalet</option>
                <option >Casa</option>
            </select>
        </p>
        <p>
            <label><b>Zona: </b> </label>
            <select name="zona">
                <option >Centro</option>
                <option >Zaidin</option>
                <option >Chana</option>
                <option >Albaicin</option>
                <option >Sacromonte</option>
                <option >Realejo</option>
            </select>
        </p>
        <p>
            <label><b>Direccion: </b> </label>
            <input name = "direccion" type = "text"/>
        </p>
        <p>
            <label><b>Numero de dormitorios: </b> </label>
            <input type=radio name=numeroDormitorios value=1>1
            <input type=radio name=numeroDormitorios value=2>2
            <input type=radio name=numeroDormitorios value=3>3
            <input type=radio name=numeroDormitorios value=4>4
            <input type=radio name=numeroDormitorios value=5>5
        </p>
        <p>
            <label><b>Precio: </b> </label>
            <input name = "precio" type = "text"/> €
        </p>
        <p>
            <label><b>Metros cuadrados: </b> </label>
            <input name = "metros" type = "text"/> metros cuadrados
        </p>
        <p>
            <label><b>Extras (marque los que procedan): </b>  </label>
            <input type="checkbox"  name="extras[]" value="piscina"> Piscina
            <input type="checkbox"  name="extras[]" value="jardin"> Jardin
            <input type="checkbox"  name="extras[]" value="garaje"> Garaje
        </p>
        <p>
            <label><b>Foto: </b> </label>
            <input type="file" name="foto" accept="image/*"/>
        </p>
        <p>
            <label><b>Observaciones: </b> </label>
            <textarea name="comentarios" rows="10" cols="60"></textarea>
        </p>
        <input type="submit" value="Insertar vivienda" style ="  margin:  0.5em;" />
    </form>
</div>

</body>
</html>