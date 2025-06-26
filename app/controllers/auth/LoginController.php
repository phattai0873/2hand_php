<?php
require_once __DIR__ . '/../../models/user.php';

class LoginController {
    public function showLoginForm() {
        // $title = "Đăng nhập";
        // $view = __DIR__ . '/../../views/auth/login.php';
        // include __DIR__ .'/../../views/shared/layouts/admin/admin_layout.php';
        include __DIR__ . '/../../views/auth/login.php';    
    }


    public function login() {
        session_start();
        $username = $_POST['username'];
        $password = $_POST['password'];

        
        $userModel = new UserModel();
        $user = $userModel->getUserByUsername($username);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            header("Location: /2handhub/publics/index.php?action=Dashboard");
        } else {
            echo "Sai tài khoản hoặc mật khẩu!";
            // echo '<pre>';
            // print_r($user);
            // echo '</pre>';
            // echo password_verify($password, $user['password']) ? "Mật khẩu đúng" : "Mật khẩu sai";
        }
    }
}
