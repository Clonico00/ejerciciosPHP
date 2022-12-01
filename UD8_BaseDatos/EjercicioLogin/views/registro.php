<h1>Registro</h1>
<form action="../index.php?controller=Usuario&action=registro" method="post">
    <label for="nombre">Usuario</label>
    <input type="text" name="usuario" id="usuario" required>
    
    <label for="apellidos">Contraseña</label>
    <input type="password" name="password" id="password" required>

    <input type="submit" value="Registrar">
</form>