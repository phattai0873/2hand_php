<?php

class DashboardController {
    public function showDashboard() {
        // Kiểm tra quyền truy cập của người dùng
        if (!$this->isUserLoggedIn()) {
            header('Location: /2handhub/publics/index.php?action=LoginForm');
            exit();
        }

        // Hiển thị trang Dashboard
        $this->renderDashboard();
    }

    private function isUserLoggedIn() {
        return isset($_SESSION['username']);
    }

    private function renderDashboard() {
        echo "Hello, Admin Dashboard!";
    }
}