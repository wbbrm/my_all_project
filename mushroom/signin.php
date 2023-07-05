<!DOCTYPE html>
<html lang="th-TH">
<head>
	<title>ระบบค้นหาข้อมูลเห็ด-เข้าสู่ระบบ</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/logo/logonotext.png"/>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=ABeeZee&display=swap">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:ital@1&display=swap">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="text-center">
	<style>
    	body { 
    	    background: #FAF5EB;
    	    font-family: 'ABeeZee','Kanit', sans-serif;
    	    display: -ms-flexbox;
  			display: flex;
  			-ms-flex-align: center;
  			align-items: center;
  			padding-top: 40px;
  			padding-bottom: 40px;
    	}

    	button:focus {outline: none;}
	</style>
	<div class="container-xl">
		<form action="login.php" method="post">
			<div class="row row-cols">
				<div class="col-md"></div>
				<div class="col-md">
					<img src="img/logo/logonocircle.png" class="icon">
					<div align="center"><h5>ลงชื่อเข้าสู่ระบบ</h5></div>
					<input class="form-control-plaintext p-1" style="margin-bottom: -2px;border-bottom-right-radius: 0;border-bottom-left-radius: 0;" type="text" placeholder="ชื่อผู้ใช้" name="txtusername" required>
					<input class="form-control-plaintext p-1" style="border-top-left-radius: 0;border-top-right-radius: 0;" type="password" placeholder="รหัสผ่าน" name="txtpassword" required><br>
					<button type="submit">เข้าสู่ระบบ</button>
					<p class="mt-5 mb-3 text-muted">© 2020</p>
					<a href="index.php">กลับหน้าหลัก</a>
				</div>
				<div class="col-md"></div>
			</div>
		</form>
	</div>
</html>