<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h3>Quên mật khẩu</h3>
        <form method="POST" action="index.php?action=SendResetCode">
            <input type="email" name="email" placeholder="Nhập email đã đăng ký" required>
            <input type="submit" value="Gửi mã xác nhận">
        </form>
</body>
</html>