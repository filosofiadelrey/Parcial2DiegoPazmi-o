<?php
require_once 'models/asistenciasModel.php';

class AsistenciasController {

    // Mostrar todas las asistencias
    public function index() {
        $asistenciasModel = new AsistenciasModel();
        $asistencias = $asistenciasModel->getAsistencias();
        require_once 'views/asistencias/index.php';
    }

    // Agregar una nueva asistencia
    public function add() {
        if ($_POST) {
            $id_cliente = $_POST['id_cliente'];
            $id_clase = $_POST['id_clase'];
            $fecha = $_POST['fecha'];
            $asistenciasModel = new AsistenciasModel();
            $asistenciasModel->addAsistencia($id_cliente, $id_clase, $fecha);
            header("Location: index.php?controller=asistencias&action=index");
        }
        require_once 'views/asistencias/add.php';
    }

    // Eliminar una asistencia
    public function delete() {
        if ($_GET['id']) {
            $id = $_GET['id'];
            $asistenciasModel = new AsistenciasModel();
            $asistenciasModel->deleteAsistencia($id);
            header("Location: index.php?controller=asistencias&action=index");
        }
    }
}
?>
