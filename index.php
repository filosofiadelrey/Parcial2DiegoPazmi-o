<?php
session_start();

// Obtener el controlador y la acción de la URL, si existen
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'dashboard';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// Verificar si el usuario está logueado
if (!isset($_SESSION['usuario']) && $controller !== 'login') {
    // No está logueado y no está en el controlador de login, redirigir a login.php
    header("Location: views/login.php");
    exit;
}

// Construir el nombre del archivo del controlador
$controllerFile = 'controllers/' . ucfirst($controller) . 'Controller.php';

// Verificar si el archivo del controlador existe
if (file_exists($controllerFile)) {
    // Requerir el archivo del controlador
    require_once $controllerFile;

    // Construir el nombre de la clase del controlador
    $controllerClass = ucfirst($controller) . 'Controller';

    // Verificar si la clase del controlador existe
    if (class_exists($controllerClass)) {
        // Instanciar la clase del controlador
        $controllerObject = new $controllerClass();

        // Verificar si el método (acción) existe en la clase del controlador
        if (method_exists($controllerObject, $action)) {
            // Llamar al método (acción) del controlador
            $controllerObject->$action();
        } else {
            echo "Acción no encontrada";
        }
    } else {
        echo "Clase del controlador no encontrada";
    }
} else {
    echo "Archivo del controlador no encontrado";
}
?>
