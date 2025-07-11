<?php
require_once __DIR__ . '/../../models/user.php';

class RegisterController {
    public function showRegisterForm() {
        include __DIR__ . '/../../views/auth/register.php';
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            echo "Vui lòng truy cập form và gửi dữ liệu.";
            return;
        }

        if (
            empty($_POST['username']) ||
            empty($_POST['password']) ||
            empty($_POST['email']) ||
            empty($_POST['phone'])
        ) {
            echo "Thiếu thông tin. Vui lòng điền đầy đủ.";
            var_dump($_POST);
            return;
        }

        $username = $_POST['username'];
        $password = $_POST['password'];
        $email    = $_POST['email'];
        $phone    = $_POST['phone'];

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $userModel = new UserModel();
        $success = $userModel->createUser($username,
         $hashedPassword,
         $email, $phone ,"",
         2);

        if ($success) {
            echo "Đăng ký thành công!";
        } else {
            echo "Lỗi đăng ký. Có thể tên tài khoản đã tồn tại.";
        }
    }
}
