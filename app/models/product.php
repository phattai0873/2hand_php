<?php
require_once '../core/db_connect.php';

class ProductModel {

   public function get_all_product() {
        global $conn;
        $sql = "SELECT * FROM products";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }
    


}
