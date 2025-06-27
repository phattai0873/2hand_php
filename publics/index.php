<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>2HandHub</title>
    <link rel="stylesheet" href="/2handhub/publics/assets/css/Login.css">
</head>
<body>

<?php
require_once __DIR__ . '/../app/controllers/auth/LoginController.php';
require_once __DIR__ . '/../app/controllers/auth/RegisterController.php';
require_once __DIR__ . '/../app/controllers/auth/ForgotPasswordController.php';
require_once __DIR__ . '/../app/controllers/admin/DashboardController.php';
require_once __DIR__ . '/../app/controllers/user/homeController.php';

$action = $_GET['action'] ?? 'loginForm';

switch ($action) {
    case 'login':
        (new LoginController())->login();
        break;
    case 'loginForm':
        (new LoginController())->showLoginForm();
        break;
    case 'register':
        (new RegisterController())->register();
        break;
    case 'registerForm':
        (new RegisterController())->showRegisterForm();
        break;
    case 'forgotPasswordForm':
        (new ForgotPasswordController())->showForgotPassForm();
        break;
    case 'sendResetCode':
        (new ForgotPasswordController())->sendResetCode();
        break;
    case 'dashboard':
        (new DashboardController())->showDashboard();
        break;
    case 'home':
        (new HomeController())->list_product();
        break;
    default:
        echo "Không tìm thấy action: $action";
        break;
}
?>

</body>
</html>
