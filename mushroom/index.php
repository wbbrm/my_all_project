<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="th-TH">
<head>
	<title>ระบบค้นหาข้อมูลเห็ด-หน้าหลัก</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/logo/logonotext.png"/>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=ABeeZee&display=swap">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:ital@1&display=swap">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <?php include ('navbar.php'); ?>
    <div class="container-fluid py-5 my-5" style="background-color: #FAF5EB;">
    	<div class="row row-cols">
    		<div class="col-sm"></div>
    		<div class="col-sm">
    			<div align="center">
    				<img src="img/logo/logonocircle.png" class="icon">
    			</div>
	   		</div>
	   		<div class="col-sm"></div>
	   	</div>
	   	<div class="row row-cols">
	   		<div class="col-md"><p></p></div>
	   		<div class="col-md" style="text-align: center;">
	   			<form action="search.php" method="get" enctype="multipart/form-data">
                    <div class="input-group">
                        <input name="searchname" class="form-control-plaintext p-1" type="text" id="searchname" placeholder="ค้นหาเห็ด" style="font-size: 16px;border-radius: 5px 0 0 5px;">
                        <div class="input-group-append">
                            <button type="submit" style="border-radius: 0 5px 5px 0;"><i class='fas fa-search' style="color: #FFFFFF;"></i></button>
                        </div>
                    </div>
                </form>
	   		</div>
	   		<div class="col-md"><p></p></div>
	   	</div>
    </div>
    <div class="container-fluid mb-3 pt-5" style="color: #583D28;">
    	<div class="row">
    		<div class="col" style="font-size:10px;">
    			มหาวิทยาลัยราชภัฏพระนคร<br>
                เลขที่ 9 แจ้งวัฒนะ แขวงอนุสาวรีย์ เขตบางเขน จังหวัดกรุงเทพฯ 10220 โทร. 02-544-8456 โทรสาร 02-544-8617<br>
                วิทยาลัยชัยบาดาลพิพัฒน์ มหาวิทยาลัยราชภัฏพระนคร<br>
                เลขที่ 259 หมู่ 5 ตำบลชัยบาดาล อำเภอชัยบาดาล จังหวัดลพบุรี 15230 โทร. (036)792-110
			</div>
    	</div>
    </div>
</body>
<footer>
	Copyright © 2020 Phranakhon Rajabhat University
</footer>
</html>