<?php include 'views/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Instructores</title>
    <link rel="stylesheet" href="assets/css/styles.css">
<script src="assets/js/scripts.js"></script>

</head>
<body>
    <h1>Lista de Instructores</h1>
    <a href="index.php?controller=instructores&action=add">Agregar Instructor</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
        <?php while ($instructor = $instructores->fetch_object()): ?>
            <tr>
                <td><?= $instructor->ID_Instructor; ?></td>
                <td><?= $instructor->Nombre; ?></td>
                <td>
                    <a href="index.php?controller=instructores&action=update&id=<?= $instructor->ID_Instructor; ?>">Editar</a>
                        <a href="index.php?controller=instructores&action=delete&id=<?= $instructor->ID_Instructor; ?>" data-confirm="¿Estás seguro de que deseas eliminar este instructor">Eliminar</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
