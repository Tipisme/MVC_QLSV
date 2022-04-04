<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/app.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Trang chủ</title>
</head>
<body>
    <div class="topright">
        <form action="http://localhost/QLSV/Home/Login">
            <input type="submit" value="Đăng xuất">
        </form>
    </div>
    <div id="wrapper">
        <form action="http://localhost/QLSV/News/ShowList">
            <input type="submit" value="Danh sách sinh viên" class="form-submit">
        </form>
        <form action="http://localhost/QLSV/News/AddStu">
            <input type="submit" value="Thêm sinh viên" class="form-submit">
        </form>
        <form action="http://localhost/QLSV/News/EditStu">
            <input type="submit" value="Sửa thông tin" class="form-submit">
        </form>
        <form action="http://localhost/QLSV/News/DelStu">
            <input type="submit" value="Xóa sinh viên" class="form-submit">
        </form>
    </div>
</body>
</html>