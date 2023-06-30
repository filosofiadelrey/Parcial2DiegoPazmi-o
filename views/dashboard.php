<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

// Verificar si el usuario está logueado
if (!isset($_SESSION['usuario'])) {
    // No está logueado, redirigir a login.php
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gimnasio Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <style>
        body {
            background-image: url(https://images.pexels.com/photos/669584/pexels-photo-669584.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Gimnasio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link" href="index.php?controller=clientes&action=index">Clientes</a>
                        <a class="nav-link" href="../index.php?controller=clientes&action=index">Clientes</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?controller=clases&action=index">Clases</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?controller=instructores&action=index">Instructores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?controller=asistencias&action=index">Asistencias</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="text-center">
        <h2>Bienvenido al sistema de gestión de gimnasio</h2>
        <!-- Aquí puedes agregar más contenido para la página después de iniciar sesión -->
    </div>
</body>
</html>
