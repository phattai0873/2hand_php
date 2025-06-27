<?php
require_once '../core/db_connect.php';

class UserModel {
    public function getUserByUsername($username) {
        global $conn;
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function createUser($username, $hashedPassword, $email, $phone, $fullname, $id_role = 2) {
        global $conn;
        $sql = "INSERT INTO users (username, password, email, phone, fullname, id_role) VALUES (?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssi", $username, $hashedPassword, $email, $phone, $fullname, $id_role);
        return $stmt->execute();
    }   

}