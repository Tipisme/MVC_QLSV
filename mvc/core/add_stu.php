<?php
require_once ('DB.php');
$s_id = '';

$s_fullname = $s_age = $s_address = $s_gender = $s_email = $s_phone = $s_score = '';

if (!empty($_POST)) {
	$s_id = '';

	if (isset($_POST['fullname'])) {
		$s_fullname = $_POST['fullname'];
	}

	if (isset($_POST['age'])) {
		$s_age = $_POST['age'];
	}

	if (isset($_POST['address'])) {
		$s_address = $_POST['address'];
	}

	if (isset($_POST['id'])) {
		$s_id = $_POST['id'];
	}
    if (isset($_POST['gender'])){
        $s_gender = $_POST['gender'];
    }
    if (isset($_POST['email'])){
        $s_email = $_POST['email'];
    }
    if (isset($_POST['phone'])){
        $s_phone = $_POST['phone'];
    }
    if (isset($_POST['score'])){
        $s_score = $_POST['score'];
    }

	$s_fullname = str_replace('\'', '\\\'', $s_fullname);
	$s_age      = str_replace('\'', '\\\'', $s_age);
	$s_address  = str_replace('\'', '\\\'', $s_address);
	$s_id       = str_replace('\'', '\\\'', $s_id);
    $s_gender   = str_replace('\'', '\\\'', $s_gender);
    $s_email    = str_replace('\'', '\\\'', $s_email);
    $s_phone    = str_replace('\'', '\\\'', $s_phone);
    $s_score    = str_replace('\'', '\\\'', $s_score);

	if ($s_id != '') {
		//update
		$sql = "update student set fullname = '$s_fullname', age = '$s_age', address = '$s_address',
				gender = '$s_gender', email = '$s_email', phone = '$s_phone', score = '$s_score' where id = " .$s_id;
	} else {
		//insert
		$sql = "insert into student(fullname, age, gender, address, email, phone, score) value 
        ('$s_fullname', '$s_age','$s_gender', '$s_address', '$s_email', '$s_phone', '$s_score')";
	}

	// echo $sql;

	execute($sql);

	header('Location: ShowList');
	die();
}
$id = '';
if (isset($_GET['id'])) {
	$id          = $_GET['id'];
	$sql         = 'select * from student where id = '.$id;
	$studentList = executeResult($sql);
	if ($studentList != null && count($studentList) > 0) {
		$std        = $studentList[0];
		$s_fullname = $std['fullname'];
		$s_age      = $std['age'];
		$s_address  = $std['address'];
        $s_gender   = $std['gender'];
        $s_email    = $std['email'];
        $s_phone    = $std['phone'];
        $s_score    = $std['score'];
	} else {
		$id = '';
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/app.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Thêm sinh viên</title>
</head>
<body>
<div class="topright">
        			<form action="http://localhost/QLSV/Home/Login">
           				<input type="submit" value="Đăng suất" >
        			</form>
    			</div>
    <div id="wrapper">
        <div action="" id="form-show" method="get">
            <h1 class="form-heading"><font color="black">Thêm sinh viên</font></h1><form method="post">
                <div>
                    <label for="usr">Name:</label>
                </div>
                <div>
                    <input type="number" name="id" value="<?=$id?>" style="display: none;">
                    <input required="true" class="form-in" type="text" name="fullname" value="<?=$s_fullname?>">
                </div>
                <div>
                    <label for="age">Age:</label>
                </div>
                <div>
                    <input type="text" class="form-in" name="age" value="<?=$s_age?>">
                </div>
                <div>
                    <label for="age">Gender: </label>
                </div>
                <div>
                    <input type="text" class="form-in" name="gender" value="<?=$s_gender?>">
                </div>
                <div>
                    <label for="age">Địa chỉ: </label>
                </div>
                <div>
                    <input type="text" class="form-in" name="address" value="<?=$s_address?>">
                </div>
                <div>
                    <label for="age">Email: </label>
                </div>
                <div>
                    <input type="text" class="form-in" name="email" value="<?=$s_email?>">
                </div>
                <div>
                    <label for="age">Số điện thoại: </label>
                </div>
                <div>
                    <input type="text" class="form-in" name="phone" value="<?=$s_phone?>">
                </div>
                <div>
                    <label for="age">Điểm: </label>
                </div>
                <div>
                    <input type="text" class="form-in" name="score" value="<?=$s_score?>">
                </div>
                <button class="form-submit" color="black">Lưu</button>
            </form>

        </div>
    </div>
    <div class="bottomright">
        			<form action="http://localhost/QLSV/News">
           				<input type="submit" value="Thoát" >
        			</form>
    			</div>
</body>
</html>