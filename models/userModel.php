<?php
require_once 'UserModel.php';

// Crear una instancia de la clase UserModel
$userModel = new UserModel();

// Luego, puedes utilizar los métodos de la clase UserModel según sea necesario
$username = 'john';
$password = 'password';
$user = $userModel->getUserByUsernameAndPassword($username, $password);

// Realiza las operaciones adicionales con los datos de usuario obtenidos

?>
