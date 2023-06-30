<?php
require_once 'config.php';

class ClasesModel {

    // Obtener todas las clases
    public function getClases() {
        global $conn;
        $query = "SELECT * FROM Clases";
        $result = $conn->query($query);
        return $result;
    }

    // Agregar una nueva clase
    public function addClase($nombre, $id_instructor) {
        global $conn;
        $query = "INSERT INTO Clases (Nombre, ID_Instructor) VALUES ('$nombre', $id_instructor)";
        $conn->query($query);
    }

    // Actualizar una clase
    public function updateClase($id, $nombre, $id_instructor) {
        global $conn;
        $query = "UPDATE Clases SET Nombre = '$nombre', ID_Instructor = $id_instructor WHERE ID_Clase = $id";
        $conn->query($query);
    }

    // Eliminar una clase
    public function deleteClase($id) {
        global $conn;
        $query = "DELETE FROM Clases WHERE ID_Clase = $id";
        $conn->query($query);
    }
}
?>
