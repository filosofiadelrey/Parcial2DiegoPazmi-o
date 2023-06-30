<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrar Asistencia</title>
</head>
<body>
    <h1>Registrar Asistencia</h1>
    <form action="index.php?controller=asistencias&action=add" method="post">
        <label for="id_cliente">ID Cliente:</label>
        <input type="number" name="id_cliente" required>
        <label for="id_clase">ID Clase:</label>
        <input type="number" name="id_clase" required>
        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" required>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>
