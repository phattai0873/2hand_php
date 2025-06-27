<?php
    require_once __DIR__.'/../../models/product.php';

class homeController {
    public function list_product() {
        $productModel = new ProductModel();
        $products = $productModel->get_all_product();
        if ($products) {
            include __DIR__.'/../../views/user/home.php';
        } else {
            echo "Không có sản phẩm nào.";
        }
    }
}