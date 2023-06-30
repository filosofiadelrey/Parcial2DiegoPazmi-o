<?php
require_once 'models/instructoresModel.php';

class InstructoresController {

    // Mostrar todos los instructores
    public function index() {
        $instructoresModel = new InstructoresModel();
        $instructores = $instructoresModel->getInstructores();
        require_once 'views/instructores/index.php';
    }

    // Agregar un nuevo instructor
    public function add() {
        if ($_POST) {
            $nombre = $_POST['nombre'];
            $instructoresModel = new InstructoresModel();
            $instructoresModel->addInstructor($nombre);
            header("Location: index.php?controller=instructores&action=index");
        }
        require_once 'views/instructores/add.php';
    }

    // Actualizar un instructor
    public function update() {
        if ($_POST) {
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $instructoresModel = new InstructoresModel();
            $instructoresModel->updateInstructor($id, $nombre);
            header("Location: index.php?controller=instructores&action=index");
        }
        require_once 'views/instructores/update.php';
    }

    // Eliminar un instructor
    public function delete() {
        if ($_GET['id']) {
            $id = $_GET['id'];
            $instructoresModel = new InstructoresModel();
            $instructoresModel->deleteInstructor($id);
            header("Location: index.php?controller=instructores&action=index");
        }
    }
}
?>
