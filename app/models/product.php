<?php
require_once '../core/db_connect.php';

class ProductModel {
    public function getAllProducts() {
        global $conn;
        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getProductById($id) {
        global $conn;
        $sql = "SELECT * FROM products WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function createProduct($name, $price, $description, $image) {
        global $conn;
        $sql = "INSERT INTO products (name, price, description, image) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sdss", $name, $price, $description, $image);
        return $stmt->execute();
    }
}
