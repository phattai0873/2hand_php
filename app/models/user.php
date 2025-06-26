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

    public function createUser($username, $hashedPassword, $email, $phone) {
    global $conn;
    $sql = "INSERT INTO users (username, password, email, sdt) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $username, $hashedPassword, $email, $phone);
    return $stmt->execute(); // Trả về true nếu thành công
    }   

}