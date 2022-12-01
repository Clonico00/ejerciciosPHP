<h1>Modificar</h1>
<form action="../index.php?controller=Usuario&action=modificar" method="post">
    <label for="nombre">Usuario</label>
    <input type="text" name="usuario" id="usuario" required>

    <label for="apellidos">Contraseña</label>
    <input type="password" name="password" id="password" required>

    <label for="rol">Rol</label>
    <input type="number" name="rol" id="rol" min="1" max="2" required>

    <input type="submit" value="Modificar">
</form>