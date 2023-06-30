<?php
require_once 'config.php';

class InstructoresModel {

    // Obtener todos los instructores
    public function getInstructores() {
        global $conn;
        $query = "SELECT * FROM Instructores";
        $result = $conn->query($query);
        return $result;
    }

    // Agregar un nuevo instructor
    public function addInstructor($nombre) {
        global $conn;
        $query = "INSERT INTO Instructores (Nombre) VALUES ('$nombre')";
        $conn->query($query);
    }

    // Actualizar un instructor
    public function updateInstructor($id, $nombre) {
        global $conn;
        $query = "UPDATE Instructores SET Nombre = '$nombre' WHERE ID_Instructor = $id";
        $conn->query($query);
    }

    // Eliminar un instructor
    public function deleteInstructor($id) {
        global $conn;
        $query = "DELETE FROM Instructores WHERE ID_Instructor = $id";
        $conn->query($query);
    }
}
?>
