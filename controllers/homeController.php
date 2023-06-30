<?php

class HomeController {

    public function index() {
        // Aquí puedes incluir cualquier lógica que necesites para la página de inicio.
        
        // Renderizar la vista de la página de inicio
        require_once 'views/home.php';
        require_once 'views/login.php';


    }
    
}
?>
