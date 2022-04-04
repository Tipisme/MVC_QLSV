<?php
require_once ('DB.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/app.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Danh sách sinh viên</title>
</head>
<body>
<div class="topright">
        			<form action="http://localhost/QLSV/Home/Login">
           				<input type="submit" value="Đăng suât" >
        			</form>
    			</div>
	<div id="wrapper">
		<div id="form-show">
			<div class="form-heading">
				Quản lý thông tin sinh viên
			</div>
			<div class="form-table">
				<table>
					<thead>
						<tr>
							<th>STT</th>
							<th width="150px">Họ & Tên</th>
                            <th>Tuổi</th>
                            <th>Giới tính</th>
							<th>Địa chỉ</th>
                            <th width="150px">Email</th>
                            <th>Số đt</th>
                            <th>Điểm</th>
							<th width="60px"></th>
						</tr>
					</thead>
					<tbody>
<?php
if (isset($_GET['s']) && $_GET['s'] != '') {
	$sql = 'select * from student where fullname like "%'.$_GET['s'].'%"';
} else {
	$sql = 'select * from student';
}

$studentList = executeResult($sql);

$index = 1;
foreach ($studentList as $std) {
	echo '<tr>
			<td>'.$std['id'].'</td>
			<td>'.$std['fullname'].'</td>
			<td>'.$std['age'].'</td>
            <td>'.$std['gender'].'</td>
			<td>'.$std['address'].'</td>
            <td>'.$std['email'].'</td>
            <td>'.$std['phone'].'</td>
            <td>'.$std['score'].'</td>
			<td><button onclick=\'window.open("EditStu?id='.$std['id'].'","_self")\'>Edit</button></td>
		</tr>';
}
?>
					</tbody>
				</table>
				<div class="bottomright">
        			<form action="http://localhost/QLSV/News">
           				<input type="submit" value="Thoát" >
        			</form>
    			</div>
			</div>
			
		</div>
	</div>
	
</body>
</html>