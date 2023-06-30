<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "gimnasio";

$conn = new mysqli($host, $user, $password, $database); // Corregido: mysqli en lugar de mysql

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare('SELECT * FROM users WHERE username = ?'); // Corregido: $conn en lugar de $mysqli

?>
