<h2>Listado de medicos:</h2>
<table>
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Apellidos</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($doctores as $doctor): ?>

        <tr>
            <td><?= $doctor->getNombre(); ?></td>
            <td><?= $doctor->getApellidos(); ?></td>
        </tr>
    <?php endforeach; ?>
</table>


