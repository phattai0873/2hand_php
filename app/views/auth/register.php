<!DOCTYPE html>
<html>
<head>
    <title>Đăng ký</title>
</head>
<body>
    <h2>Đăng ký tài khoản</h2>
    <form method="post" action="/2handhub/publics/index.php?action=register">
        <label>Tên đăng nhập:</label>
        <input type="text" name="username" required><br><br>

        <label>Mật khẩu:</label>
        <input type="password" name="password" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Số điện thoại:</label>
        <input type="text" name="phone" required><br><br>

        <input type="submit" value="Đăng ký">
    </form>
</body>
</html>
