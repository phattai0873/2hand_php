<?php

class DashboardController {
    public function showDashboard() {
        session_start();

        if (!$this->isUserLoggedIn() || !$this->hasRole(1)) {
            // var_dump($_SESSION);
            header('Location: /2handhub/publics/index.php?action=loginForm');
            exit();
        }

        $this->renderDashboard();
    }
    private function isUserLoggedIn() {
        return isset($_SESSION['username'], $_SESSION['id_role']);
    }

    private function hasRole($roleId) {
        return isset($_SESSION['id_role']) && $_SESSION['id_role'] == $roleId;
    }

    private function renderDashboard() {
        include __DIR__ . '/../../views/admin/dashboard.php';
    }
}
