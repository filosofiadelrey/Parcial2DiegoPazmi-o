<?php include 'views/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Clases</title>
    <link rel="stylesheet" href="assets/css/styles.css">
<script src="assets/js/scripts.js"></script>

</head>
<body>
    <h1>Lista de Clases</h1>
    <a href="index.php?controller=clases&action=add">Agregar Clase</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>ID Instructor</th>
            <th>Acciones</th>
        </tr>
        <?php while ($clase = $clases->fetch_object()): ?>
            <tr>
                <td><?= $clase->ID_Clase; ?></td>
                <td><?= $clase->Nombre; ?></td>
                <td><?= $clase->ID_Instructor; ?></td>
                <td>
                    <a href="index.php?controller=clases&action=update&id=<?= $clase->ID_Clase; ?>">Editar</a>
                    <a href="index.php?controller=clases&action=delete&id=<?= $clase->ID_Clase; ?>" data-confirm="¿Estás seguro de que deseas eliminar esta clase?">Eliminar</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
