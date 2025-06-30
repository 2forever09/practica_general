<!DOCTYPE html>
<html>
<head>
    <title>Registrar Asistencia</title>
    <link rel="stylesheet" href="/asistencia/public/css/styles.css">
</head>
<body>
    <h1>Registrar nueva asistencia</h1>
    <form method="post" action="?controller=asistencia&action=crear">
        <label>Estudiante: <input type="text" name="estudiante" required></label><br><br>
        <label>Fecha: <input type="date" name="fecha" required></label><br><br>
        <label>Hora: <input type="time" name="hora" required></label><br><br>
        <label>Estado:
            <select name="estado">
                <option value="PRESENTE" selected>PRESENTE</option>
                <option value="AUSENTE">AUSENTE</option>
                <option value="TARDE">TARDE</option>
                <option value="JUSTIFICADO">JUSTIFICADO</option>
            </select>
        </label><br><br>
        <label>Observaciones:<br>
            <textarea name="observaciones" rows="3" cols="40"></textarea>
        </label><br><br>
        <button type="submit">Guardar</button>
        <a href="?controller=asistencia&action=index">Cancelar</a>
    </form>
</body>
</html>
