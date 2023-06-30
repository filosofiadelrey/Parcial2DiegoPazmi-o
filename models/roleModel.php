<?php

class RoleModel {
    private $db;

    public function __construct() {
        $this->db = new mysqli('localhost', 'username', 'password', 'gimnasio');
    }

    public function getRoleById($role_id) {
        $stmt = $this->db->prepare("SELECT * FROM roles WHERE id = ?");
        $stmt->bind_param("i", $role_id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
}
?>
