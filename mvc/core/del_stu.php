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
    <title>Xóa sinh viên</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<div class="topright">
        			<form action="http://localhost/QLSV/Home/Login">
           				<input type="submit" value="Đăng suất" >
        			</form>
    			</div>
	<div id="wrapper">
		<div id="form-show">
			<div class="form-heading">
			<font color="black">Xóa sinh viên</font>
			</div>
			<div class="form-table">
				<table>
					<thead>
						<tr>
							<th>STT</th>
							<th>Họ & Tên</th>
                            <th>Tuổi</th>
                            <th>Giới tính</th>
							<th>Địa chỉ</th>
                            <th>Email</th>
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
			<td><button class="btn btn-danger" onclick="deleteStudent('.$std['id'].')">Delete</button></td>
		</tr>';
}
?>
					</tbody>
				</table>
			</div>
			
		</div>
	</div>

	<script type="text/javascript">
		function deleteStudent(id) {
			option = confirm('Bạn có muốn xoá sinh viên này không')
			if(!option) {
				return;
			}

			console.log(id)
			$.post('xoa.php', {
				'id': id
			}, function(data) {
				alert(data)
				location.reload()
			})
		}
	</script>
	 <div class="bottomright">
        			<form action="http://localhost/QLSV/News">
           				<input type="submit" value="Thoát" >
        			</form>
    			</div>
</body>
</html>