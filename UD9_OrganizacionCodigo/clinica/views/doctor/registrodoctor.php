<h2>Registrar un nuevo doctor</h2>
<form action="indexFrontController.php?controller=Doctor&action=save" method="post">
    <label for="nombre">Nombre</label>
    <input type="text" name="data[nombre]" id="nombre">


    <label for="apellidos">Apellidos</label>
    <input type="text" name="data[apellidos]" id="apellidos">


    <label for="telefono">Telefono</label>
    <input type="text" name="data[telefono]" id="telefono">


    <label for="especialidad">Especialidad</label>
    <input type="text" name="data[especialidad]" id="especialidad">


    <input type="submit" value="Registrar">
</form>