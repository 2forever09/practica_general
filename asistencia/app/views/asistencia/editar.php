<!DOCTYPE html>
<html>
<head>
    <title>Editar Asistencia</title>
    <link rel="stylesheet" href="/my_mvc_project/public/css/styles.css">
</head>
<body>
    <h1>Editar asistencia</h1>
    <form method="post" action="?controller=asistencia&action=editar&id=<?= $asistencia['id'] ?>">
        <label>Estudiante: <input type="text" name="estudiante" value="<?= $asistencia['estudiante'] ?>" required></label><br><br>
        <label>Fecha: <input type="date" name="fecha" value="<?= $asistencia['fecha'] ?>" required></label><br><br>
        <label>Hora: <input type="time" name="hora" value="<?= $asistencia['hora'] ?>" required></label><br><br>
        <label>Estado:
            <select name="estado">
                <option value="PRESENTE" <?= $asistencia['estado'] == 'PRESENTE' ? 'selected' : '' ?>>PRESENTE</option>
                <option value="AUSENTE" <?= $asistencia['estado'] == 'AUSENTE' ? 'selected' : '' ?>>AUSENTE</option>
                <option value="TARDE" <?= $asistencia['estado'] == 'TARDE' ? 'selected' : '' ?>>TARDE</option>
                <option value="JUSTIFICADO" <?= $asistencia['estado'] == 'JUSTIFICADO' ? 'selected' : '' ?>>JUSTIFICADO</option>
            </select>
        </label><br><br>
        <label>Observaciones:<br>
            <textarea name="observaciones" rows="3" cols="40"><?= $asistencia['observaciones'] ?></textarea>
        </label><br><br>
        <button type="submit">Actualizar</button>
        <a href="?controller=asistencia&action=index">Cancelar</a>
    </form>
</body>
</html>
