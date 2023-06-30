<?php
session_start();

require_once 'models/UserModel.php'; // Modificar esta línea

class AuthController {
    private $userModel;
    private $roleModel;

    public function __construct() {
        require_once 'models/userModel.php';
        require_once 'models/roleModel.php';
        

        $this->userModel = new UserModel();
        $this->roleModel = new RoleModel();
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = $this->userModel->getUserByUsernameAndPassword($username, $password);

            if ($user) {
                $_SESSION['user'] = $user;
                $_SESSION['role'] = $this->roleModel->getRoleById($user['role_id']);
                header('Location: index.php');
            } else {
                echo "Credenciales incorrectas";
            }
        } else {
            require_once 'views/login.php';
        }
    }

    public function logout() {
        session_destroy();
        header('Location: index.php');
    }
}
?>
