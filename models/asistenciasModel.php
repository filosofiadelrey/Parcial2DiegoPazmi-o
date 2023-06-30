<?php
require_once 'config.php';

class AsistenciasModel {

    // Obtener todas las asistencias
    public function getAsistencias() {
        global $conn;
        $query = "SELECT * FROM Asistencias";
        $result = $conn->query($query);
        return $result;
    }

    // Agregar una nueva asistencia
    public function addAsistencia($id_cliente, $id_clase, $fecha) {
        global $conn;
        $query = "INSERT INTO Asistencias (ID_Cliente, ID_Clase, Fecha) VALUES ($id_cliente, $id_clase, '$fecha')";
        $conn->query($query);
    }

    // Eliminar una asistencia
    public function deleteAsistencia($id) {
        global $conn;
        $query = "DELETE FROM Asistencias WHERE ID_Asistencia = $id";
        $conn->query($query);
    }
}
?>
