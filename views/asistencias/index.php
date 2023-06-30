<?php include 'views/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Asistencias</title>
    <link rel="stylesheet" href="assets/css/styles.css">
<script src="assets/js/scripts.js"></script>

</head>
<body>
    <h1>Lista de Asistencias</h1>
    <a href="index.php?controller=asistencias&action=add">Registrar Asistencia</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>ID Cliente</th>
            <th>ID Clase</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
        <?php while ($asistencia = $asistencias->fetch_object()): ?>
            <tr>
                <td><?= $asistencia->ID_Asistencia; ?></td>
                <td><?= $asistencia->ID_Cliente; ?></td>
                <td><?= $asistencia->ID_Clase; ?></td>
                <td><?= $asistencia->Fecha; ?></td>
                <td>
                        <a href="index.php?controller=asistencias&action=delete&id=<?= $asistencia->ID_Asistencia; ?>" data-confirm="¿Estás seguro de que deseas eliminar esta asistencia?">Eliminar</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
