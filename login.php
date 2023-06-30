<?php
session_start();
include('config.php');




if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = ? AND password = ?";
   

    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        // Usuario y contraseña correctos
        $row = $result->fetch_assoc();
        $_SESSION['usuario'] = $row['username'];
        $_SESSION['role_id'] = $row['role_id'];
        header("Location: dashboard.php");
        exit;
    } else {
        // Usuario y/o contraseña incorrectos
        echo "<p>Usuario o contraseña incorrectos</p>";
    }
}
?>

<!-- Aquí va el código HTML de tu formulario de inicio de sesión, como en el ejemplo anterior -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar Sesión</title>
    <!-- Incluir Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos adicionales -->
    <style>
        
        body {
            background-image: url(https://images.pexels.com/photos/703016/pexels-photo-703016.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
        .login-container {
            max-width: 400px;
            margin: 5% auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-control {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="login-container">
    <?php
    if (isset($error_message) && $error_message) {
        echo "<div class='alert alert-danger'>$error_message</div>";
    }
    ?>

    <form action="login.php" method="post">
        <div class="form-group">
            <label for="username">Nombre de usuario:</label>
            <input type="text" name="username" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <input type="submit" value="Iniciar sesión" class="btn btn-primary btn-block">
    </form>
</div>

<!-- Incluir Bootstrap JS y jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
