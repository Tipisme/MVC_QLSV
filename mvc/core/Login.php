<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/app.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Đăng nhập</title>
</head>
<body>
    <div id="wrapper">
        <form action="Login" id="form-login" method="post">
            <h1 class="form-heading">Form đăng nhập</h1>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" class="form-input" name="username" required>
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="password" class="form-input" name="password" required>
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
            </div>
            <input type="submit" name="login" value="Đăng nhập" class="form-submit">
            <font><p><b>Bạn chưa có tài khoản, <a href='Register'>Đăng ký ngay</a></b></p></font>
            <?php require_once "./mvc/core/xuly_dangnhap.php"; ?>
        </form>
    </div>
    
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="../public/js/app.js"></script>
</html>