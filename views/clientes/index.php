<?php include 'views/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Clientes</title>
    <link rel="stylesheet" href="assets/css/styles.css">
<script src="assets/js/scripts.js"></script>

</head>
<body>
    <h1>Lista de Clientes</h1>
    <a href="index.php?controller=clientes&action=add">Agregar Cliente</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
        <?php while ($cliente = $clientes->fetch_object()): ?>
            <tr>
                <td><?= $cliente->ID_Cliente; ?></td>
                <td><?= $cliente->Nombre; ?></td>
                <td>
                    <a href="index.php?controller=clientes&action=update&id=<?= $cliente->ID_Cliente; ?>">Editar</a>
                    <a href="index.php?controller=clientes&action=delete&id=<?= $cliente->ID_Cliente; ?>" data-confirm="¿Estás seguro de que deseas eliminar este cliente?">Eliminar</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
