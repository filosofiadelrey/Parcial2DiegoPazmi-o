<?php
require_once 'models/clientesModel.php';

class ClientesController {

    // Mostrar todos los clientes
    public function index() {
        $clientesModel = new ClientesModel();
        $clientes = $clientesModel->getClientes();
        require_once 'views/clientes/index.php';
    }

    // Agregar un nuevo cliente
    public function add() {
        if ($_POST) {
            $nombre = $_POST['nombre'];
            $clientesModel = new ClientesModel();
            $clientesModel->addCliente($nombre);
            header("Location: index.php?controller=clientes&action=index");
        }
        require_once 'views/clientes/add.php';
    }

    // Actualizar un cliente
    public function update() {
        if ($_POST) {
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $clientesModel = new ClientesModel();
            $clientesModel->updateCliente($id, $nombre);
            header("Location: index.php?controller=clientes&action=index");
        }
        require_once 'views/clientes/update.php';
    }

    // Eliminar un cliente
    public function delete() {
        if ($_GET['id']) {
            $id = $_GET['id'];
            $clientesModel = new ClientesModel();
            $clientesModel->deleteCliente($id);
            header("Location: index.php?controller=clientes&action=index");
        }
    }
}
?>
