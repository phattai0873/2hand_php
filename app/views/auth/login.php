<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="/2handhub/publics/assets/css/Login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;"> 
    <div class="login">
        <h2 class="text-center mb-4">Đăng nhập</h2>
        <form method="post" action="/2handhub/publics/index.php?action=login">
            <div class="mb-3">
                <input class="form-control" name="username" type="text" placeholder="Tên đăng nhập" required>
            </div>
            <div class="mb-3">
                <input class="form-control" name="password" type="password" placeholder="Mật khẩu" required>
            </div>
            <button class="btn btn-primary w-100" type="submit">Đăng nhập</button>
        </form>
        <p class="text-center mt-3">
            Chưa có tài khoản? <a href="/2handhub/publics/index.php?action=registerForm">Đăng ký ngay</a>
        </p>
    </div>
</div>
</body>
</html>
