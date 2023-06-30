<?php
require_once 'models/clasesModel.php';

class ClasesController {

    // Mostrar todas las clases
    public function index() {
        $clasesModel = new ClasesModel();
        $clases = $clasesModel->getClases();
        require_once 'views/clases/index.php';
    }

    // Agregar una nueva clase
    public function add() {
        if ($_POST) {
            $nombre = $_POST['nombre'];
            $id_instructor = $_POST['id_instructor'];
            $clasesModel = new ClasesModel();
            $clasesModel->addClase($nombre, $id_instructor);
            header("Location: index.php?controller=clases&action=index");
        }
        require_once 'views/clases/add.php';
    }

    // Actualizar una clase
    public function update() {
        if ($_POST) {
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $id_instructor = $_POST['id_instructor'];
            $clasesModel = new ClasesModel();
            $clasesModel->updateClase($id, $nombre, $id_instructor);
            header("Location: index.php?controller=clases&action=index");
        }
        require_once 'views/clases/update.php';
    }

    // Eliminar una clase
    public function delete() {
        if ($_GET['id']) {
            $id = $_GET['id'];
            $clasesModel = new ClasesModel();
            $clasesModel->deleteClase($id            );
            header("Location: index.php?controller=clases&action=index");
        }
    }
}
?>
