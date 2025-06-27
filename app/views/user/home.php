<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang chủ - Danh sách sản phẩm</title>
    <style>
        body { font-family: Arial; }
        .product-list { display: flex; flex-wrap: wrap; gap: 20px; }
        .product-item {
            border: 1px solid #ccc;
            padding: 15px;
            width: 200px;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        .product-item h3 {
            margin: 0 0 10px;
            font-size: 18px;
        }
        .product-item p {
            margin: 5px 0;
        }
        .product-item img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<h2>📦 Danh sách sản phẩm</h2>

<div class="product-list">
    <?php foreach ($products as $product): ?>
        <div class="product-item">
            <img src="<?php echo $product['image_url'] ?? 'default.jpg'; ?>" alt="Ảnh sản phẩm">
            <h3><?php echo htmlspecialchars($product['name_product']); ?></h3>
            <p>Giá: <?php echo number_format($product['price']); ?> đ</p>
            <p><?php echo htmlspecialchars($product['description']); ?></p>

        </div>
        <?php endforeach; ?>
</div>

</body>
</html>
