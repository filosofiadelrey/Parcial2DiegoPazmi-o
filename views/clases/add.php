<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Agregar Clase</title>
</head>
<body>
    <h1>Agregar Clase</h1>
    <form action="index.php?controller=clases&action=add" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>
        <label for="id_instructor">ID Instructor:</label>
        <input type="number" name="id_instructor" required>
        <input type="submit" value="Agregar">
    </form>
</body>
</html>
