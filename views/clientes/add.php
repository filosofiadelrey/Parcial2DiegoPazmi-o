<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Agregar Cliente</title>
</head>
<body>
    <h1>Agregar Cliente</h1>
    <form action="index.php?controller=clientes&action=add" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>
        <input type="submit" value="Agregar">
    </form>
</body>
</html>
