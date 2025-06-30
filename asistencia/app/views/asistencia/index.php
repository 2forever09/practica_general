<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/asistencia/public/css/styles.css">
    <title>Lista de Asistencias</title>
</head>
<body>
    <h1>Control de Asistencia</h1>
    <a href="?controller=asistencia&action=crear">Registrar nueva asistencia</a>
    <table>
        <thead>
            <tr>
                <th>ID</th><th>Estudiante</th><th>Fecha</th><th>Hora</th><th>Estado</th><th>Observaciones</th><th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($asistencias as $asi): ?>
                <tr>
                    <td><?= $asi['id'] ?></td>
                    <td><?= htmlspecialchars($asi['estudiante']) ?></td>
                    <td><?= $asi['fecha'] ?></td>
                    <td><?= $asi['hora'] ?></td>
                    <td><?= $asi['estado'] ?></td>
                    <td><?= nl2br(htmlspecialchars($asi['observaciones'])) ?></td>
                    <td>
                        <a href="?controller=asistencia&action=editar&id=<?= $asi['id'] ?>">Editar</a> |
                        <a href="?controller=asistencia&action=eliminar&id=<?= $asi['id'] ?>" onclick="return confirm('¿Eliminar asistencia?');">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
