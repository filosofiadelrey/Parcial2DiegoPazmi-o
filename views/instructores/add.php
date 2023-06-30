<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Agregar Instructor</title>
</head>
<body>
    <h1>Agregar Instructor</h1>
    <form action="index.php?controller=instructores&action=add" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>
        <input type="submit" value="Agregar">
    </form>
</body>
</html>
