<?php
require_once 'config.php';

class ClientesModel {

    // Obtener todos los clientes
    public function getClientes() {
        global $conn;
        $query = "SELECT * FROM Clientes";
        $result = $conn->query($query);
        return $result;
    }

    // Agregar un nuevo cliente
    public function addCliente($nombre) {
        global $conn;
        $query = "INSERT INTO Clientes (Nombre) VALUES ('$nombre')";
        $conn->query($query);
    }

    // Actualizar un cliente
    public function updateCliente($id, $nombre) {
        global $conn;
        $query = "UPDATE Clientes SET Nombre = '$nombre' WHERE ID_Cliente = $id";
        $conn->query($query);
    }

    // Eliminar un cliente
    public function deleteCliente($id) {
        global $conn;
        $query = "DELETE FROM Clientes WHERE ID_Cliente = $id";
        $conn->query($query);
    }
}
?>
