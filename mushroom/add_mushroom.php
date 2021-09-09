<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="th-TH">
<head>
	<title>MushroomFinder-เพิ่มข้อมูลเห็ด</title>
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
    <?php
        if ($_SESSION["user"]) {
    ?>
	<?php
		function genkey() {
			include 'connect.php';
        	$sql = "SELECT Mushroom_Id FROM mushroom ORDER BY Mushroom_Id DESC";
    		$query = mysqli_query($conn,$sql);
    		if (mysqli_num_rows($query)<=0) {
        		return   "63102-15130-88-001" ;
    		} else {
        		$result = mysqli_fetch_array($query);
        		$mushroomid = substr($result["Mushroom_Id"],-3);
    			$mushroomid = intval($mushroomid)+1;
        		$mushroomid = "63102-15130-88-".str_pad($mushroomid,3,'0',STR_PAD_LEFT);
	    		return $mushroomid;
        	}
    	}
	?>
	<style>
		.tab {display: none;}

		button {
			background-color: #F5E8DC;
        	color: #656565;
        	padding: 14px 16px;
        	text-align: center;
        	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.25);
        	text-decoration: none;
        	border: none;
		}

		.step {
			display: inline-block;
			margin: 2px;
			width: 1px;
		}

		.step .active {opacity: 1;}

		.step .finish {background-color: #000000;}
	</style>
	<?php include 'nav.php'; include 'logout_modal.php'; ?>
	<div class="w3-main" style="margin-left:200px;margin-top:43px;padding-left: 20px;padding-right: 20px;">
		<header class="w3-container" style="padding-top:22px;font-size: 25px;color: #583D28;">
    		เพิ่มข้อมูลเห็ด
  		</header>
  		<form action="insert_mushroom.php" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-xl-3">
					<label for="mushroom_id">รหัสเห็ด :</label>
					<input name="mushroom_id" type="text" value="<?=genkey()?>" readonly>
					<label for="txtname">ชื่อเห็ด :</label>
					<input name="txtname" type="text">
					<label for="txtlocalname">ชื่อท้องถิ่น :</label>
					<input name="txtlocalname" type="text">
					<label for="txtcommonname">ชื่อสามัญ :</label>
					<input name="txtcommonname" type="text">
					<label for="txtscience">ชื่อทางวิทยาศาสตร์ :</label>
					<input  name="txtscience" type="text">
					<label for="txtfamily">วงศ์ของเห็ด :</label><br>
					<select name="txtfamily" class="mb-2">
						<option value="" hidden> Select option</option>
						<?php
							include 'connect.php';
							$sql1 = "SELECT * FROM mushroomfamily";
							$query1 = mysqli_query($conn,$sql1);
							while ($result1 = mysqli_fetch_array($query1,MYSQLI_ASSOC)) {
						?>
						<option value="<?php echo $result1['MushroomFamily_Id'] ?>"><?php echo $result1['MushroomFamily_Id'] ?>:<?php echo $result1['MushroomFamily_name'] ?>
						<?php
							}
							mysqli_close($conn);
						?>
					</select>
					<label for="txttype">ชนิดของเห็ด :</label><br>
					<select name="txttype" class="mb-2">
						<option value="" hidden> Select option</option>
						<option value="กินได้">กินได้</option>
						<option value="กินไม่ได้">กินไม่ได้</option>
						<option value="มีพิษ">มีพิษ</option>
						<option value="ไม่ทราบชนิด">ไม่ทราบชนิด</option>
					</select>
					<label for="txtbenefit">การใช้ประโยชน์ :</label><br>
					<textarea name="txtbenefit"></textarea>
				</div>
				<div class="col-xl-3">
					<label for="txthabitat">ถิ่นอาศัย/ลักษณะของการขึ้น :</label>
					<input name="txthabitat" type="text">	
					<label>รูปแบบการเจริญเติบโต :</label><br>
					<label>
						<input type="radio" name="growth" id="growth1" value="ขึ้นเป็นดอกเดี่ยว">
						&nbspขึ้นเป็นดอกเดี่ยว&nbsp
					</label>
					<label>
						<input type="radio" name="growth" id="growth2" value="ขึ้นเป็นกระจุก">
						&nbspขึ้นเป็นกระจุก&nbsp
					</label>
					<label>
						<input type="radio" name="growth" id="growth3" value="ขึ้นเป็นกลุ่ม">
						&nbspขึ้นเป็นกลุ่ม&nbsp
					</label><br>
					<label for="radius">ความยาวเส้นผ่าศูนย์กลาง :&nbsp
						<input name="radius" type="text" style="width: 20%;">&nbspมม.
					</label><br>
					<label for="height">ความสูงของหมวกเห็ด :&nbsp
						<input name="height" type="text" style="width: 20%;">&nbspมม.
					</label><br>
					<label for="txtcolor">สีหมวกเห็ด :&nbsp</label>
					<input  name="txtcolor" type="text" style="width: 65%;"><br>
					<label for="txtdescription">สรุป :</label><br>
					<textarea name="txtdescription"></textarea>
					<label>รูป :
                    	<input type="file" id="img" accept="img/mushroom/" name="img" onchange="showPreview(event);">
                    	<br><img id="img_preview" width="300" style="padding: 16px 0;max-width: 100%">
                    </label>
				</div>
				<div class="col-xl-6">
					<div class="tab">
						<label>ลักษณะรูปร่างหมวกเห็ดเมื่อมองจากด้านบน :</label><br>
						<label for="cap_up1">
							<input type="radio" name="cap_up" id="cap_up1" value="cap_up1.png">
    						&nbsp<img src="img/cap_up/cap_up1.png" width="90">&nbsp
						</label>
						<label for="cap_up2">
							<input type="radio" name="cap_up" id="cap_up2" value="cap_up2.png">
    						&nbsp<img src="img/cap_up/cap_up2.png" width="90">&nbsp
						</label>
						<label for="cap_up3">
							<input type="radio" name="cap_up" id="cap_up3" value="cap_up3.png">
							&nbsp<img src="img/cap_up/cap_up3.png" width="90">&nbsp
						</label>
						<label for="cap_up4">
							<input type="radio" name="cap_up" id="cap_up4" value="cap_up4.png">
							&nbsp<img src="img/cap_up/cap_up4.png" width="90">&nbsp
						</label>
						<label for="cap_up5">
							<input type="radio" name="cap_up" id="cap_up5" value="cap_up5.png">
							&nbsp<img src="img/cap_up/cap_up5.png" width="90">&nbsp
						</label>
						<label for="cap_up6">
							<input type="radio" name="cap_up" id="cap_up6" value="cap_up6.png">
							&nbsp<img src="img/cap_up/cap_up6.png" width="90">&nbsp
						</label><br>
						<label>ลักษณะรูปร่างหมวกเห็ดเมื่อมองจากด้านข้าง :</label><br>
						<label for="cap_side1">
							<input type="radio" name="cap_side" id="cap_side1" value="cap_side1.png">
							&nbsp<img src="img/cap_side/cap_side1.png" width="90">&nbsp
						</label>
						<label for="cap_side2">
							<input type="radio" name="cap_side" id="cap_side2" value="cap_side2.png">
							&nbsp<img src="img/cap_side/cap_side2.png" width="90">&nbsp
						</label>
						<label for="cap_side3">
							<input type="radio" name="cap_side" id="cap_side3" value="cap_side3.png">
							&nbsp<img src="img/cap_side/cap_side3.png" width="90">&nbsp
						</label>
						<label for="cap_side4">
							<input type="radio" name="cap_side" id="cap_side4" value="cap_side4.png">
							&nbsp<img src="img/cap_side/cap_side4.png" width="90">&nbsp
						</label>
						<label for="cap_side5">
							<input type="radio" name="cap_side" id="cap_side5" value="cap_side5.png">
							&nbsp<img src="img/cap_side/cap_side5.png" width="90">
						</label>
						<label for="cap_side6">
							<input type="radio" name="cap_side" id="cap_side6" value="cap_side6.png">
							&nbsp<img src="img/cap_side/cap_side6.png" width="90">&nbsp
						</label>
						<label for="cap_side7">
							<input type="radio" name="cap_side" id="cap_side7" value="cap_side7.png">
							&nbsp<img src="img/cap_side/cap_side7.png" width="90">&nbsp
						</label>
						<label for="cap_side8">
							<input type="radio" name="cap_side" id="cap_side8" value="cap_side8.png">
							&nbsp<img src="img/cap_side/cap_side8.png" width="90">&nbsp
						</label>
						<label for="cap_side9">
							<input type="radio" name="cap_side" id="cap_side9" value="cap_side9.png">
							&nbsp<img src="img/cap_side/cap_side9.png" width="90">&nbsp
						</label>
						<label for="cap_side10">
							<input type="radio" name="cap_side" id="cap_side10" value="cap_side10.png">
							&nbsp<img src="img/cap_side/cap_side10.png" width="90">&nbsp
						</label>
						<label for="cap_side11">
							<input type="radio" name="cap_side" id="cap_side11" value="cap_side11.png">
							&nbsp<img src="img/cap_side/cap_side11.png" width="90">&nbsp
						</label>
						<label for="cap_side12">
							<input type="radio" name="cap_side" id="cap_side12" value="cap_side12.png">
							&nbsp<img src="img/cap_side/cap_side12.png" width="90">&nbsp
						</label>
						<label for="cap_side13">
							<input type="radio" name="cap_side" id="cap_side13" value="cap_side13.png">
							&nbsp<img src="img/cap_side/cap_side13.png" width="90">&nbsp
						</label>
						<label for="cap_side14">
							<input type="radio" name="cap_side" id="cap_side14" value="cap_side14.png">
							&nbsp<img src="img/cap_side/cap_side14.png" width="90">&nbsp
						</label>
						<label for="cap_side15">
							<input type="radio" name="cap_side" id="cap_side15" value="cap_side15.png">
							&nbsp<img src="img/cap_side/cap_side15.png" width="90">&nbsp
						</label>
						<label for="cap_side16">
							<input type="radio" name="cap_side" id="cap_side16" value="cap_side16.png">
							&nbsp<img src="img/cap_side/cap_side16.png" width="90">&nbsp
						</label>
						<label for="cap_side17">
							<input type="radio" name="cap_side" id="cap_side17" value="cap_side17.png">
							&nbsp<img src="img/cap_side/cap_side17.png" width="90">&nbsp
						</label>
  					</div>
  					<div class="tab">
  						<label>ลักษณะตรงกลางของหมวกเห็ด :</label><br>
						<label for="cap_center1">
							<input type="radio" name="cap_center" id="cap_center1" value="cap_center1.png">
    						&nbsp<img src="img/cap_center/cap_center1.png" width="90">&nbsp
						</label>
						<label for="cap_center2">
							<input type="radio" name="cap_center" id="cap_center2" value="cap_center2.png">
    						&nbsp<img src="img/cap_center/cap_center2.png" width="90">&nbsp
						</label>
						<label for="cap_center3">
							<input type="radio" name="cap_center" id="cap_center3" value="cap_center3.png">
							&nbsp<img src="img/cap_center/cap_center3.png" width="90">&nbsp
						</label>
						<label for="cap_center4">
							<input type="radio" name="cap_center" id="cap_center4" value="cap_center4.png">
							&nbsp<img src="img/cap_center/cap_center4.png" width="90">&nbsp
						</label>
						<label for="cap_center5">
							<input type="radio" name="cap_center" id="cap_center5" value="cap_center5.png">
							&nbsp<img src="img/cap_center/cap_center5.png" width="90">&nbsp
						</label>
						<label for="cap_center6">
							<input type="radio" name="cap_center" id="cap_center6" value="cap_center6.png">
							&nbsp<img src="img/cap_center/cap_center6.png" width="90">&nbsp
						</label>
						<label for="cap_center7">
							<input type="radio" name="cap_center" id="cap_center7" value="cap_center7.png">
							&nbsp<img src="img/cap_center/cap_center7.png" width="90">&nbsp
						</label>
						<label for="cap_center8">
							<input type="radio" name="cap_center" id="cap_center8" value="cap_center8.png">
							&nbsp<img src="img/cap_center/cap_center8.png" width="90">&nbsp
						</label>
						<label for="cap_center9">
							<input type="radio" name="cap_center" id="cap_center9" value="cap_center9.png">
							&nbsp<img src="img/cap_center/cap_center9.png" width="90">&nbsp
						</label>
						<label for="cap_center10">
							<input type="radio" name="cap_center" id="cap_center10" value="cap_center10.png">
							&nbsp<img src="img/cap_center/cap_center10.png" width="90">&nbsp
						</label><br>
						<label>ลักษณะขอบหมวกเห็ด :</label><br>
						<label for="cap_margin1">
							<input type="radio" name="cap_margin" id="cap_margin1" value="cap_margin1.png">
							&nbsp<img src="img/cap_margin/cap_margin1.png" width="90">&nbsp
						</label>
						<label for="cap_margin2">
							<input type="radio" name="cap_margin" id="cap_margin2" value="cap_margin2.png">
							&nbsp<img src="img/cap_margin/cap_margin2.png" width="90">&nbsp
						</label>
						<label for="cap_margin3">
							<input type="radio" name="cap_margin" id="cap_margin3" value="cap_margin3.png">
							&nbsp<img src="img/cap_margin/cap_margin3.png" width="90">&nbsp
						</label>
						<label for="cap_margin4">
							<input type="radio" name="cap_margin" id="cap_margin4" value="cap_margin4.png">
							&nbsp<img src="img/cap_margin/cap_margin4.png" width="90">&nbsp
						</label>
						<label for="cap_margin5">
							<input type="radio" name="cap_margin" id="cap_margin5" value="cap_margin5.png">
							&nbsp<img src="img/cap_margin/cap_margin5.png" width="90">&nbsp
						</label>
						<label for="cap_margin6">
							<input type="radio" name="cap_margin" id="cap_margin6" value="cap_margin6.png">
							&nbsp<img src="img/cap_margin/cap_margin6.png" width="90">&nbsp
						</label>
						<label for="cap_margin7">
							<input type="radio" name="cap_margin" id="cap_margin7" value="cap_margin7.png">
							&nbsp<img src="img/cap_margin/cap_margin7.png" width="90">&nbsp
						</label>
						<label for="cap_margin8">
							<input type="radio" name="cap_margin" id="cap_margin" value="cap_margin8.png">
							&nbsp<img src="img/cap_margin/cap_margin8.png" width="90">&nbsp
						</label>
						<label for="cap_margin9">
							<input type="radio" name="cap_margin" id="cap_margin9" value="cap_margin9.png">
							&nbsp<img src="img/cap_margin/cap_margin9.png" width="90">&nbsp
						</label>
  					</div>
  					<div class="tab">
  						<label>ลักษณะพื้นผิวด้านบนหมวกเห็ด :</label><br>
  						<label for="surface_up1">
							<input type="radio" name="surface_up" id="surface_up1" value="แห้ง">
    						&nbspแห้ง&nbsp
						</label>
						<label for="surface_up2">
							<input type="radio" name="surface_up" id="surface_up2" value="เปียก">
    						&nbspเปียก&nbsp
						</label>
						<label for="surface_up3">
							<input type="radio" name="surface_up" id="surface_up3" value="เมือก">
    						&nbspเมือก&nbsp
						</label>
						<label for="surface_up4">
							<input type="radio" name="surface_up" id="surface_up4" value="เรียบ">
    						&nbspเรียบ&nbsp
						</label>
						<label for="surface_up5">
							<input type="radio" name="surface_up" id="surface_up5" value="ไม่เรียบ">
    						&nbspไม่เรียบ&nbsp
						</label>
						<label for="surface_up6">
							<input type="radio" name="surface_up" id="surface_up6" value="มีขน">
    						&nbspมีขน&nbsp
						</label><br>
						<label for="surface_up7">
							<input type="radio" name="surface_up" id="surface_up7" value="">
    						&nbspอื่นๆ&nbsp
						</label>
						<label for="txtsurface_up">
							<input type="text" name="txtsurface_up" placeholder="โปรดระบุ">
						</label><br>
  						<label for="surface_up_pic1">
							<input type="radio" name="surface_up_pic" id="surface_up_pic1" value="surface_up1.jpg">
    						&nbsp<img src="img/surface_up/surface_up1.jpg" width="90">&nbsp
						</label>
						<label for="surface_up_pic2">
							<input type="radio" name="surface_up_pic" id="surface_up_pic2" value="surface_up2.jpg">
    						&nbsp<img src="img/surface_up/surface_up2.jpg" width="90">&nbsp
						</label>
						<label for="surface_up_pic3">
							<input type="radio" name="surface_up_pic" id="surface_up_pic3" value="surface_up3.jpg">
    						&nbsp<img src="img/surface_up/surface_up3.jpg" width="90">&nbsp
						</label>
						<label for="surface_up_pic4">
							<input type="radio" name="surface_up_pic" id="surface_up_pic4" value="surface_up4.jpg">
    						&nbsp<img src="img/surface_up/surface_up4.jpg" width="90">&nbsp
						</label>
						<label for="surface_up_pic5">
							<input type="radio" name="surface_up_pic" id="surface_up_pic5" value="surface_up5.jpg">
    						&nbsp<img src="img/surface_up/surface_up5.jpg" width="90">&nbsp
						</label>
						<label for="surface_up_pic6">
							<input type="radio" name="surface_up_pic" id="surface_up_pic6" value="surface_up6.jpg">
    						&nbsp<img src="img/surface_up/surface_up6.jpg" width="90">&nbsp
						</label>
						<label for="surface_up_pic7">
							<input type="radio" name="surface_up_pic" id="surface_up_pic7" value="surface_up7.jpg">
    						&nbsp<img src="img/surface_up/surface_up7.jpg" width="90">&nbsp
						</label>
						<label for="surface_up_pic8">
							<input type="radio" name="surface_up_pic" id="surface_up_pic8" value="urface_up9.jpg">
    						&nbsp<img src="img/surface_up/surface_up9.jpg" width="90">&nbsp
						</label>
						<label for="surface_up_pic10">
							<input type="radio" name="surface_up_pic" id="surface_up_pic10" value="surface_up10.jpg">
    						&nbsp<img src="img/surface_up/surface_up10.jpg" width="90">&nbsp
						</label>
						<label for="surface_up_pic11">
							<input type="radio" name="surface_up_pic" id="surface_up_pic11" value="surface_up11.jpg">
    						&nbsp<img src="img/surface_up/surface_up11.jpg" width="90">&nbsp
						</label>
						<label for="surface_up_pic12">
							<input type="radio" name="surface_up_pic" id="surface_up_pic12" value="surface_up12.jpg">
    						&nbsp<img src="img/surface_up/surface_up12.jpg" width="90">&nbsp
						</label>
						<label for="surface_up_pic13">
							<input type="radio" name="surface_up_pic" id="surface_up_pic13" value="surface_up13.jpg">
    						&nbsp<img src="img/surface_up/surface_up13.jpg" width="90">&nbsp
						</label>
						<label for="surface_up_pic14">
							<input type="radio" name="surface_up_pic" id="surface_up_pic14" value="surface_up14.jpg">
    						&nbsp<img src="img/surface_up/surface_up14.jpg" width="90">&nbsp
						</label>
						<label for="surface_up_pic15">
							<input type="radio" name="surface_up_pic" id="surface_up_pic15" value="surface_up15.jpg">
    						&nbsp<img src="img/surface_up/surface_up15.jpg" width="90">&nbsp
						</label>
						<label for="surface_up_pic16">
							<input type="radio" name="surface_up_pic" id="surface_up_pic16" value="surface_up16.jpg">
    						&nbsp<img src="img/surface_up/surface_up16.jpg" width="90">&nbsp
						</label>
						<label for="surface_up_pic17">
							<input type="radio" name="surface_up_pic" id="surface_up_pic17" value="surface_up17.jpg">
    						&nbsp<img src="img/surface_up/surface_up17.jpg" width="90">&nbsp
						</label>
						<label for="surface_up_pic18">
							<input type="radio" name="surface_up_pic" id="surface_up_pic18" value="surface_up18.jpg">
    						&nbsp<img src="img/surface_up/surface_up18.jpg" width="90">&nbsp
						</label>
						<label for="surface_up_pic19">
							<input type="radio" name="surface_up_pic" id="surface_up_pic19" value="surface_up19.jpg">
    						&nbsp<img src="img/surface_up/surface_up19.jpg" width="90">&nbsp
						</label>
						<label for="surface_up_pic20">
							<input type="radio" name="surface_up_pic" id="surface_up_pic20" value="surface_up20.jpg">
    						&nbsp<img src="img/surface_up/surface_up20.jpg" width="90">&nbsp
						</label>
						<label for="surface_up_pic21">
							<input type="radio" name="surface_up_pic" id="surface_up_pic21" value="surface_up21.jpg">
    						&nbsp<img src="img/surface_up/surface_up21.jpg" width="90">&nbsp
						</label>
						<label for="surface_up_pic22">
							<input type="radio" name="surface_up_pic" id="surface_up_pic22" value="surface_up22.jpg">
    						&nbsp<img src="img/surface_up/surface_up22.jpg" width="90">&nbsp
						</label>
						<label for="surface_up_pic23">
							<input type="radio" name="surface_up_pic" id="surface_up_pic23" value="surface_up23.jpg">
    						&nbsp<img src="img/surface_up/surface_up23.jpg" width="90">&nbsp
						</label>
						<label for="surface_up_pic24">
							<input type="radio" name="surface_up_pic" id="surface_up_pic24" value="surface_up24.jpg">
    						&nbsp<img src="img/surface_up/surface_up24.jpg" width="90">&nbsp
						</label>
						<label for="surface_up_pic25">
							<input type="radio" name="surface_up_pic" id="surface_up_pic25" value="surface_up25.jpg">
    						&nbsp<img src="img/surface_up/surface_up25.jpg" width="90">&nbsp
						</label>
						<label for="surface_up_pic26">
							<input type="radio" name="surface_up_pic" id="surface_up_pic26" value="surface_up26.jpg">
    						&nbsp<img src="img/surface_up/surface_up26.jpg" width="90">&nbsp
						</label>
						<label for="surface_up_pic27">
							<input type="radio" name="surface_up_pic" id="surface_up_pic27" value="surface_up27.jpg">
    						&nbsp<img src="img/surface_up/surface_up27.jpg" width="90">&nbsp
						</label>
						<label for="surface_up_pic28">
							<input type="radio" name="surface_up_pic" id="surface_up_pic28" value="surface_up28.jpg">
    						&nbsp<img src="img/surface_up/surface_up28.jpg" width="90">&nbsp
						</label>
						<label for="surface_up_pic29">
							<input type="radio" name="surface_up_pic" id="surface_up_pic29" value="surface_up29.jpg">
    						&nbsp<img src="img/surface_up/surface_up29.jpg" width="90">&nbsp
						</label>
						<label for="surface_up_pic30">
							<input type="radio" name="surface_up_pic" id="surface_up_pic30" value="surface_up30.jpg">
    						&nbsp<img src="img/surface_up/surface_up30.jpg" width="90">&nbsp
						</label>
						<label for="surface_up_pic31">
							<input type="radio" name="surface_up_pic" id="surface_up_pic31" value="surface_up31.jpg">
    						&nbsp<img src="img/surface_up/surface_up31.jpg" width="90">&nbsp
						</label>
						<label for="surface_up_pic32">
							<input type="radio" name="surface_up_pic" id="surface_up_pic32" value="surface_up32.jpg">
    						&nbsp<img src="img/surface_up/surface_up32.jpg" width="90">&nbsp
						</label>
  					</div>
  					<div class="tab">
  						<label>ลักษณะพื้นผิวขอบหมวกเห็ด :</label><br>
  						<label for="surface_margin1">
							<input type="radio" name="surface_margin" id="surface_margin1" value="เรียบ">
    						&nbspเรียบ&nbsp
						</label>
						<label for="surface_margin2">
							<input type="radio" name="surface_margin" id="surface_margin2" value="หยักคล้ายเส้นขน">
    						&nbspหยักคล้ายเส้นขน&nbsp
						</label>
						<label for="surface_margin3">
							<input type="radio" name="surface_margin" id="surface_margin3" value="หยักคล้ายซี่เลื่อย">
    						&nbspหยักคล้ายซี่เลื่อย&nbsp
						</label>
						<label for="surface_margin4">
							<input type="radio" name="surface_margin" id="surface_margin4" value="หยักคล้ายฟัน">
    						&nbspหยักคล้ายฟัน&nbsp
						</label><br>
						<label for="surface_margin5">
							<input type="radio" name="surface_margin" id="surface_margin5" value="">
    						&nbspอื่นๆ&nbsp
						</label>
						<label for="txtsurface_margin">
							<input type="text" name="txtsurface_margin" placeholder="โปรดระบุ">
						</label><br>
  						<label for="surface_margin_pic1">
							<input type="radio" name="surface_margin_pic" id="surface_margin_pic1" value="surface_margin1.jpg">
    						&nbsp<img src="img/surface_margin/surface_margin1.jpg" width="90">&nbsp
						</label>
						<label for="surface_margin_pic2">
							<input type="radio" name="surface_margin_pic" id="surface_margin_pic2" value="surface_margin2.jpg">
    						&nbsp<img src="img/surface_margin/surface_margin2.jpg" width="90">&nbsp
						</label>
						<label for="surface_margin_pic3">
							<input type="radio" name="surface_margin_pic" id="surface_margin_pic3" value="surface_margin3.jpg">
    						&nbsp<img src="img/surface_margin/surface_margin3.jpg" width="90">&nbsp
    					</label>
    					<label for="surface_margin_pic4">
							<input type="radio" name="surface_margin_pic" id="surface_margin_pic4" value="surface_margin4.jpg">
    						&nbsp<img src="img/surface_margin/surface_margin4.jpg" width="90">&nbsp
    					</label>
    					<label for="surface_margin_pic5">
							<input type="radio" name="surface_margin_pic" id="surface_margin_pic5" value="surface_margin5.jpg">
    						&nbsp<img src="img/surface_margin/surface_margin5.jpg" width="90">&nbsp
    					</label>
    					<label for="surface_margin_pic6">
							<input type="radio" name="surface_margin_pic" id="surface_margin_pic6" value="surface_margin6.jpg">
    						&nbsp<img src="img/surface_margin/surface_margin6.jpg" width="90">&nbsp
    					</label>
    					<label for="surface_margin_pic7">
							<input type="radio" name="surface_margin_pic" id="surface_margin_pic7" value="surface_margin7.jpg">
    						&nbsp<img src="img/surface_margin/surface_margin7.jpg" width="90">&nbsp
						</label>
						<label for="surface_margin_pic8">
							<input type="radio" name="surface_margin_pic" id="surface_margin_pic8" value="surface_margin8.jpg">
    						&nbsp<img src="img/surface_margin/surface_margin8.jpg" width="90">&nbsp
						</label>
						<label for="surface_margin_pic9">
							<input type="radio" name="surface_margin_pic" id="surface_margin_pic9" value="surface_margin9.jpg">
    						&nbsp<img src="img/surface_margin/surface_margin9.jpg" width="90">&nbsp
						</label>
						<label for="surface_margin_pic10">
							<input type="radio" name="surface_margin_pic" id="surface_margin_pic10" value="surface_margin10.jpg">
    						&nbsp<img src="img/surface_margin/surface_margin10.jpg" width="90">&nbsp
						</label>
						<label for="surface_margin_pic11">
							<input type="radio" name="surface_margin_pic" id="surface_margin_pic11" value="surface_margin11.jpg">
    						&nbsp<img src="img/surface_margin/surface_margin11.jpg" width="90">&nbsp
						</label>
  					</div>
  					<div class="tab" id="undercap">
  						<label>ลักษณะใต้หมวกเห็ด :&nbsp</label>
						<label>
							<input type="radio" name="undercap" id="undercap1" value="ครีบ" data-toggle="collapse" data-target="#gills">
							&nbspครีบ&nbsp
						</label>
						<label>
							<input type="radio" name="undercap" id="undercap2" value="รู" data-toggle="collapse" data-target="#pores">
							&nbspรู&nbsp
						</label>
						<label>
							<input type="radio" name="undercap" id="undercap3" value="สันนูน" data-toggle="collapse" data-target="#ridges">
							&nbspสันนูน&nbsp
						</label>
						<label>
							<input type="radio" name="undercap" id="undercap4" value="ฟัน" data-toggle="collapse" data-target="#teeth">
							&nbspฟัน&nbsp
						</label>
						<label>
							<input type="radio" name="undercap" id="undercap45" value="เรียบ" data-toggle="collapse" data-target="#flat">
							&nbspเรียบ(สำหรับเห็ดที่ด้านล่างเรียบ ไม่ปรากฎลักษณะของครีบ รู สันูน หรือฟัน)&nbsp
						</label>
						<div id="gills" class="collapse" data-parent="#undercap">
							<label>ลักษณะการติดของครีบบริเวณก้าน :</label><br>
							<label for="gills_stipe1">
								<input type="radio" name="gills_stipe" id="gills_stipe1" value="gills_stipe1.png">
    							&nbsp<img src="img/gills_stipe/gills_stipe1.png" width="90">&nbsp
							</label>
							<label for="gills_stipe2">
								<input type="radio" name="gills_stipe" id="gills_stipe2" value="gills_stipe2.png">
    							&nbsp<img src="img/gills_stipe/gills_stipe2.png" width="90">&nbsp
							</label>
							<label for="gills_stipe3">
								<input type="radio" name="gills_stipe" id="gills_stipe3" value="gills_stipe3.png">
    							&nbsp<img src="img/gills_stipe/gills_stipe3.png" width="90">&nbsp
							</label>
							<label for="gills_stipe4">
								<input type="radio" name="gills_stipe" id="gills_stipe4" value="gills_stipe4.png">
    							&nbsp<img src="img/gills_stipe/gills_stipe4.png" width="90">&nbsp
							</label>
							<label for="gills_stipe5">
								<input type="radio" name="gills_stipe" id="gills_stipe5" value="gills_stipe5.png">
    							&nbsp<img src="img/gills_stipe/gills_stipe5.png" width="90">&nbsp
							</label>
							<label for="gills_stipe6">
								<input type="radio" name="gills_stipe" id="gills_stipe6" value="gills_stipe6.png">
    							&nbsp<img src="img/gills_stipe/gills_stipe6.png" width="90">&nbsp
							</label>
							<label for="gills_stipe7">
								<input type="radio" name="gills_stipe" id="gills_stipe7" value="gills_stipe7.png">
    							&nbsp<img src="img/gills_stipe/gills_stipe7.png" width="90">&nbsp
							</label>
							<label for="gills_stipe8">
								<input type="radio" name="gills_stipe" id="gills_stipe8" value="gills_stipe8.png">
    							&nbsp<img src="img/gills_stipe/gills_stipe8.png" width="90">&nbsp
							</label>
							<label for="gills_stipe9">
								<input type="radio" name="gills_stipe" id="gills_stipe9" value="gills_stipe9.png">
    							&nbsp<img src="img/gills_stipe/gills_stipe9.png" width="90">&nbsp
							</label>
							<label for="gills_stipe10">
								<input type="radio" name="gills_stipe" id="gills_stipe10" value="gills_stipe10.png">
    							&nbsp<img src="img/gills_stipe/gills_stipe10.png" width="90">&nbsp
							</label>
							<label for="gills_stipe11">
								<input type="radio" name="gills_stipe" id="gills_stipe11" value="gills_stipe11.png">
    							&nbsp<img src="img/gills_stipe/gills_stipe11.png" width="90">&nbsp
							</label>
							<label for="gills_stipe12">
								<input type="radio" name="gills_stipe" id="gills_stipe12" value="gills_stipe12.png">
    							&nbsp<img src="img/gills_stipe/gills_stipe12.png" width="90">&nbsp
							</label><br>
							<label>ลักษณะของครีบ :</label><br>
  							<label for="gills1">
								<input type="radio" name="gills" id="gills1" value="เรียบ">
    							&nbspเรียบ&nbsp
							</label>
							<label for="gills2">
								<input type="radio" name="gills" id="gills2" value="หยักคล้ายเส้นขน">
    							&nbspหยักคล้ายเส้นขน&nbsp
							</label>
							<label for="gills3">
								<input type="radio" name="gills" id="gills3" value="หยักคล้ายซี่เลื่อย">
    							&nbspหยักคล้ายซี่เลื่อย&nbsp
							</label>
							<label for="gills4">
								<input type="radio" name="gills" id="gills4" value="หยักคล้ายฟัน">
    							&nbspหยักคล้ายฟัน&nbsp
							</label><br>
							<label for="gills5">
								<input type="radio" name="gills" id="gills5" value="">
    							&nbspอื่นๆ&nbsp
							</label>
							<label for="txtgills">
								<input type="text" name="txtgills" placeholder="โปรดระบุ">
							</label><br>
							<label for="gills_pic1">
								<input type="radio" name="gills_pic" id="gills_pic1" value="gills1.png">
    							&nbsp<img src="img/gills/gills1.png" width="90">&nbsp
							</label>
							<label for="gills_pic2">
								<input type="radio" name="gills_pic" id="gills_pic2" value="gills2.png">
    							&nbsp<img src="img/gills/gills2.png" width="90">&nbsp
							</label>
							<label for="gills_pic3">
								<input type="radio" name="gills_pic" id="gills_pic3" value="gills3.png">
    							&nbsp<img src="img/gills/gills3.png" width="90">&nbsp
							</label>
							<label for="gills_pic4">
								<input type="radio" name="gills_pic" id="gills_pic4" value="gills4.png">
    							&nbsp<img src="img/gills/gills4.png" width="90">&nbsp
							</label>
							<label for="gills_pic5">
								<input type="radio" name="gills_pic" id="gills_pic5" value="gills5.png">
    							&nbsp<img src="img/gills/gills5.png" width="90">&nbsp
							</label>
							<label for="gills_pic6">
								<input type="radio" name="gills_pic" id="gills_pic6" value="gills6.png">
    							&nbsp<img src="img/gills/gills6.png" width="90">&nbsp
							</label>
							<label for="gills_pic7">
								<input type="radio" name="gills_pic" id="gills_pic7" value="gills7.png">
    							&nbsp<img src="img/gills/gills7.png" width="90">&nbsp
							</label>
							<label for="gills_pic8">
								<input type="radio" name="gills_pic" id="gills_pic8" value="gills8.png">
    							&nbsp<img src="img/gills/gills8.png" width="90">&nbsp
							</label>
							<label for="gills_pic9">
								<input type="radio" name="gills_pic" id="gills_pic9" value="gills9.png">
    							&nbsp<img src="img/gills/gills9.png" width="90">&nbsp
							</label>
							<label for="gills_pic10">
								<input type="radio" name="gills_pic" id="gills_pic10" value="gills10.png">
    							&nbsp<img src="img/gills/gills10.png" width="90">&nbsp
							</label><br>
							<label for="txtgills_color">สีของครีบ :&nbsp</label>
							<input  name="txtgills_color" type="text" style="width: 30%;">&nbsp
							<label>ความถี่ของครีบ :</label>
							<select name="txtgills_freq" class="mb-2"  style="width: 30%;">
								<option value="" hidden> Select option</option>
								<option value="120 distant">120 distant</option>
								<option value="119 subdistant">119 subdistant</option>
								<option value="118 close">118 close</option>
								<option value="117 crowded">117 crowded</option>
							</select>
						</div>
						<div id="pores" class="collapse" data-parent="#undercap">
							<label>ลักษณะของปากรู :</label><br>
  							<label for="pores1">
								<input type="radio" name="pores" id="pores1" value="เรียบ">
    							&nbspเรียบ&nbsp
							</label>
							<label for="pores2">
								<input type="radio" name="pores" id="pores2" value="หยักคล้ายเส้นขน">
    							&nbspหยักคล้ายเส้นขน&nbsp
							</label>
							<label for="pores3">
								<input type="radio" name="pores" id="pores3" value="หยักคล้ายซี่เลื่อย">
    							&nbspหยักคล้ายซี่เลื่อย&nbsp
							</label>
							<label for="pores4">
								<input type="radio" name="pores" id="pores4" value="หยักคล้ายฟัน">
    							&nbspหยักคล้ายฟัน&nbsp
							</label><br>
							<label for="pores5">
								<input type="radio" name="pores" id="pores5" value="">
    							&nbspอื่นๆ&nbsp
							</label>
							<label for="txtpores">
								<input type="text" name="txtpores" placeholder="โปรดระบุ">
							</label><br>
							<label>รูปร่างของรู :</label><br>
  								<label for="pores_shape1">
								<input type="radio" name="pores_shape" id="pores_shape1" value="กลม">
    							&nbspกลม&nbsp
							</label>
							<label for="pores_shape2">
								<input type="radio" name="pores_shape" id="pores_shape2" value="เหลี่ยม">
    							&nbspเหลี่ยม&nbsp
							</label>
							<label for="pores_shape3">
								<input type="radio" name="pores_shape" id="pores_shape3" value="ไม่แน่นอน">
    							&nbspไม่แน่นอน&nbsp
							</label><br>
							<label for="pores_shape4">
								<input type="radio" name="pores_shape" id="pores_shape4" value="">
    							&nbspอื่นๆ&nbsp
							</label>
							<label for="txtpores_shape">
								<input type="text" name="txtpores_shape" placeholder="โปรดระบุ">
							</label><br>
							<label for="txtpores_color">สีของรู :&nbsp</label>
							<input  name="txtpores_color" type="text" style="width: 30%;">
						</div>
						<div id="ridges" class="collapse" data-parent="#undercap">
							<label>ลักษณะของสันนูน :</label><br>
  							<label for="ridges1">
								<input type="radio" name="ridges" id="ridges1" value="เรียบ">
    							&nbspเรียบ&nbsp
							</label>
							<label for="ridges2">
								<input type="radio" name="ridges" id="ridges2" value="หยักคล้ายเส้นขน">
    							&nbspหยักคล้ายเส้นขน&nbsp
							</label>
							<label for="ridges3">
								<input type="radio" name="ridges" id="ridges3" value="หยักคล้ายซี่เลื่อย">
    							&nbspหยักคล้ายซี่เลื่อย&nbsp
							</label>
							<label for="ridges4">
								<input type="radio" name="ridges" id="ridges4" value="หยักคล้ายฟัน">
    							&nbspหยักคล้ายฟัน&nbsp
							</label><br>
							<label for="ridges5">
								<input type="radio" name="ridges" id="ridges5" value="">
    							&nbspอื่นๆ&nbsp
							</label>
							<label for="txtridges">
								<input type="text" name="txtridges" placeholder="โปรดระบุ">
							</label><br>
							<label for="txtridges_color">สีของสันนูน :&nbsp</label>
							<input  name="txtridges_color" type="text" style="width: 30%;">
						</div>
						<div id="teeth" class="collapse" data-parent="#undercap">
							<label for="teeth_width">ความกว้างของฟัน :&nbsp
								<input name="teeth_width" type="text" style="width: 20%;">&nbspมม.
							</label><br>
							<label for="teeth_length">ความยาวของฟัน :&nbsp
								<input name="teeth_length" type="text" style="width: 20%;">&nbspมม.
							</label><br>
							<label for="txtteeth_color">สีของฟัน :&nbsp</label>
							<input  name="txtteeth_color" type="text" style="width: 30%;">
						</div>
						<div id="flat" class="collapse" data-parent="#undercap">
							<label for="txtflat_color">สี :&nbsp</label>
							<input  name="txtflat_color" type="text" style="width: 30%;">
						</div>
  					</div>
  					<div class="tab">
  						<label>ก้าน :&nbsp</label>
						<label>
							<input type="radio" name="stipe" id="stipe1" value="มี">
							&nbspมี&nbsp
						</label>
						<label>
							<input type="radio" name="stipe" id="stipe2" value="ไม่มี">
							&nbspไม่มี (ข้ามไปวงแหวน)&nbsp
						</label><br>
						<label>ลักษณะของก้าน :&nbsp</label><br>
						<label>
							<input type="radio" name="stipe_type" id="stipe_type1" value="บริเวณก้านติดกับหมวก">
							&nbspบริเวณก้านติดกับหมวก&nbsp
						</label>
						<label>
							<input type="radio" name="stipe_type" id="stipe_type2" value="กลาง">
							&nbspกลาง&nbsp
						</label>
						<label>
							<input type="radio" name="stipe_type" id="stipe_type3" value="เลื่อมออกจากกลาง">
							&nbspเลื่อมออกจากกลาง&nbsp
						</label>
						<label>
							<input type="radio" name="stipe_type" id="stipe_type4" value="ติดด้านข้าง">
							&nbspติดด้านข้าง&nbsp
						</label><br>
						<label for="stipe_type_pic1">
							<input type="radio" name="stipe_type_pic" id="stipe_type_pic1" value="stipe1.png">
    						&nbsp<img src="img/stipe/stipe1.png" width="150">&nbsp
						</label>
						<label for="stipe_type_pic2">
							<input type="radio" name="stipe_type_pic" id="stipe_type_pic2" value="stipe2.png">
    						&nbsp<img src="img/stipe/stipe2.png" width="150">&nbsp
						</label>
						<label for="stipe_type_pic3">
							<input type="radio" name="stipe_type_pic" id="stipe_type_pic3" value="stipe3.png">
    						&nbsp<img src="img/stipe/stipe3.png" width="150">&nbsp
						</label><br>
						<label>ลักษณะก้านด้านใน :&nbsp</label><br>
						<label for="stipe_in1">
							<input type="radio" name="stipe_in" id="stipe_in1" value="stipe_in1.png">
    						&nbsp<img src="img/stipe_in/stipe_in1.png" width="90">&nbsp
						</label>
						<label for="stipe_in2">
							<input type="radio" name="stipe_in" id="stipe_in2" value="stipe_in2.png">
    						&nbsp<img src="img/stipe_in/stipe_in2.png" width="90">&nbsp
						</label>
						<label for="stipe_in3">
							<input type="radio" name="stipe_in" id="stipe_in3" value="stipe_in3.png">
    						&nbsp<img src="img/stipe_in/stipe_in3.png" width="90">&nbsp
						</label>
						<label for="stipe_in4">
							<input type="radio" name="stipe_in" id="stipe_in4" value="stipe_in4.png">
    						&nbsp<img src="img/stipe_in/stipe_in4.png" width="90">&nbsp
						</label>
						<label for="stipe_in5">
							<input type="radio" name="stipe_in" id="stipe_in5" value="stipe_in5.png">
    						&nbsp<img src="img/stipe_in/stipe_in5.png" width="90">&nbsp
						</label><br>
						<label>ลักษณะก้านด้านนอก :&nbsp</label><br>
						<label for="stipe_out1">
							<input type="radio" name="stipe_out" id="stipe_out1" value="stipe_out1.png">
    						&nbsp<img src="img/stipe_out/stipe_out1.png" width="90">&nbsp
						</label>
						<label for="stipe_out2">
							<input type="radio" name="stipe_out" id="stipe_out2" value="stipe_out2.png">
    						&nbsp<img src="img/stipe_out/stipe_out2.png" width="90">&nbsp
						</label>
						<label for="stipe_out3">
							<input type="radio" name="stipe_out" id="stipe_out3" value="stipe_out3.png">
    						&nbsp<img src="img/stipe_out/stipe_out3.png" width="90">&nbsp
						</label>
						<label for="stipe_out4">
							<input type="radio" name="stipe_out" id="stipe_out4" value="stipe_out4.png">
    						&nbsp<img src="img/stipe_out/stipe_out4.png" width="90">&nbsp
						</label>
						<label for="stipe_out5">
							<input type="radio" name="stipe_out" id="stipe_out5" value="stipe_out5.png">
    						&nbsp<img src="img/stipe_out/stipe_out5.png" width="90">&nbsp
						</label><br>
						<label>ลักษณะโคนก้าน :&nbsp</label><br>
						<label for="stipe_base1">
							<input type="radio" name="stipe_base" id="stipe_base1" value="stipe_base1.png">
    						&nbsp<img src="img/stipe_base/stipe_base1.png" width="90">&nbsp
						</label>
						<label for="stipe_base2">
							<input type="radio" name="stipe_base" id="stipe_base2" value="stipe_base2.png">
    						&nbsp<img src="img/stipe_base/stipe_base2.png" width="90">&nbsp
						</label>
						<label for="stipe_base3">
							<input type="radio" name="stipe_base" id="stipe_base3" value="stipe_base3.png">
    						&nbsp<img src="img/stipe_base/stipe_base3.png" width="90">&nbsp
						</label>
						<label for="stipe_base4">
							<input type="radio" name="stipe_base" id="stipe_base4" value="stipe_base4.png">
    						&nbsp<img src="img/stipe_base/stipe_base4.png" width="90">&nbsp
						</label>
						<label for="stipe_base5">
							<input type="radio" name="stipe_base" id="stipe_base5" value="stipe_base5.png">
    						&nbsp<img src="img/stipe_base/stipe_base5.png" width="90">&nbsp
						</label><br>
						<label>ลักษณะพื้นผิวก้าน :</label><br>
  						<label for="surface_stipe1">
							<input type="radio" name="surface_stipe" id="surface_stipe1" value="แห้ง">
    						&nbspแห้ง&nbsp
						</label>
						<label for="surface_stipe2">
							<input type="radio" name="surface_stipe" id="surface_stipe2" value="เปียก">
    						&nbspเปียก&nbsp
						</label>
						<label for="surface_stipe3">
							<input type="radio" name="surface_stipe" id="surface_stipe3" value="เมือก">
    						&nbspเมือก&nbsp
						</label>
						<label for="surface_stipe4">
							<input type="radio" name="surface_stipe" id="surface_stipe4" value="เรียบ">
    						&nbspเรียบ&nbsp
						</label>
						<label for="surface_stipe5">
							<input type="radio" name="surface_stipe" id="surface_stipe5" value="ไม่เรียบ">
    						&nbspไม่เรียบ&nbsp
						</label>
						<label for="surface_stipe6">
							<input type="radio" name="surface_stipe" id="surface_stipe6" value="มีขน">
    						&nbspมีขน&nbsp
						</label><br>
						<label for="surface_stipe7">
							<input type="radio" name="surface_stipe" id="surface_stipe7" value="">
    						&nbspอื่นๆ&nbsp
						</label>
						<label for="txtsurface_stipe">
							<input type="text" name="txtsurface_stipe" placeholder="โปรดระบุ">
						</label><br>
						<label for="surface_stipe_pic1">
							<input type="radio" name="surface_stipe_pic" id="surface_stipe_pic1" value="surface_stipe1.jpg">
    						&nbsp<img src="img/surface_stipe/surface_stipe1.jpg" width="90">&nbsp
						</label>
						<label for="surface_stipe_pic2">
							<input type="radio" name="surface_stipe_pic" id="surface_stipe_pic2" value="surface_stipe2.jpg">
    						&nbsp<img src="img/surface_stipe/surface_stipe2.jpg" width="90">&nbsp
						</label>
						<label for="surface_stipe_pic3">
							<input type="radio" name="surface_stipe_pic" id="surface_stipe_pic3" value="surface_stipe3.jpg">
    						&nbsp<img src="img/surface_stipe/surface_stipe3.jpg" width="90">&nbsp
    					</label>
    					<label for="surface_stipe_pic4">
							<input type="radio" name="surface_stipe_pic" id="surface_stipe_pic4" value="surface_stipe4.jpg">
    						&nbsp<img src="img/surface_stipe/surface_stipe4.jpg" width="90">&nbsp
    					</label>
    					<label for="surface_stipe_pic5">
							<input type="radio" name="surface_stipe_pic" id="surface_stipe_pic5" value="surface_stipe5.jpg">
    						&nbsp<img src="img/surface_stipe/surface_stipe5.jpg" width="90">&nbsp
    					</label>
    					<label for="surface_stipe_pic6">
							<input type="radio" name="surface_stipe_pic" id="surface_stipe_pic6" value="surface_stipe6.jpg">
    						&nbsp<img src="img/surface_stipe/surface_stipe6.jpg" width="90">&nbsp
    					</label>
    					<label for="surface_stipe_pic7">
							<input type="radio" name="surface_stipe_pic" id="surface_stipe_pic7" value="surface_stipe7.jpg">
    						&nbsp<img src="img/surface_stipe/surface_stipe7.jpg" width="90">&nbsp
						</label>
						<label for="surface_stipe_pic8">
							<input type="radio" name="surface_stipe_pic" id="surface_stipe_pic8" value="surface_stipe8.jpg">
    						&nbsp<img src="img/surface_stipe/surface_stipe8.jpg" width="90">&nbsp
						</label>
						<label for="surface_stipe_pic9">
							<input type="radio" name="surface_stipe_pic" id="surface_stipe_pic9" value="surface_stipe9.jpg">
    						&nbsp<img src="img/surface_stipe/surface_stipe9.jpg" width="90">&nbsp
						</label>
						<label for="surface_stipe_pic10">
							<input type="radio" name="surface_stipe_pic" id="surface_stipe_pic10" value="surface_stipe10.jpg">
    						&nbsp<img src="img/surface_stipe/surface_stipe10.jpg" width="90">&nbsp
						</label>
  					</div>
  					<div class="tab">
  						<label>วงแหวน :&nbsp</label>
						<label>
							<input type="radio" name="ring" id="ring1" value="มี">
							&nbspมี&nbsp
						</label>
						<label>
							<input type="radio" name="ring" id="ring2" value="ไม่มี">
							&nbspไม่มี&nbsp
						</label><br>
						<label>ลักษณะของวงแหวน :</label><br>
  						<label for="ring_type1">
							<input type="radio" name="ring_type" id="ring_type1" value="ปลอกชั้นเดียวห้อยลง">
    						&nbspปลอกชั้นเดียวห้อยลง&nbsp
						</label>
						<label for="ring_type2">
							<input type="radio" name="ring_type" id="ring_type2" value="ขอบสองชั้น">
    						&nbspขอบสองชั้น&nbsp
						</label>
						<label for="ring_type3">
							<input type="radio" name="ring_type" id="ring_type3" value="ปลอกตั้งขึ้น">
    						&nbspปลอกตั้งขึ้น&nbsp
						</label>
						<label for="ring_type4">
							<input type="radio" name="ring_type" id="ring_type4" value="เนื้อเยื่อบางๆ หุ้มปิดครีบหรือรูสีวงแหวน">
    						&nbspเนื้อเยื่อบางๆ หุ้มปิดครีบหรือรูสีวงแหวน&nbsp
						</label><br>
						<label>กระเปาะหุ้มโคนก้าน :&nbsp</label>
						<label>
							<input type="radio" name="volva" id="volva1" value="มี">
							&nbspมี&nbsp
						</label>
						<label>
							<input type="radio" name="volva" id="volva2" value="ไม่มี">
							&nbspไม่มี&nbsp
						</label><br>
						<label for="txtvolva_color">สีกระเปาะหุ้มโคนก้าน :&nbsp</label>
						<input  name="txtvolva_color" type="text" style="width: 65%;">
  					</div>
  					<div style="overflow:auto;">
    					<div style="float:right;">
      						<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      						<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    					</div>
  					</div>
 					<div style="text-align:center;margin-top:40px;">
    					<span class="step"></span>
    					<span class="step"></span>
    					<span class="step"></span>
    					<span class="step"></span>
    					<span class="step"></span>
    					<span class="step"></span>
    					<span class="step"></span>
  					</div>
  				</div>
			</div>
			<div class="col my-1">
				<div align="center">
					<button type="submit" class="mb-2">บันทึก</button>
				</div>
			</div>
		</form>
	</div>
	<?php
        } else {
            echo "<h1>กรุณาเข้าสู่ระบบ</h1>";
            echo "<a href='signin.php'>เข้าสู่ระบบ</a>";
        }
    ?>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script>
    function showPreview(event) {
        if(event.target.files.length > 0) {
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("img_preview");
            preview.src = src;
            preview.style.display = "block";
        }
    }

	var currentTab = 0; // Current tab is set to be the first tab (0)
	showTab(currentTab); // Display the current tab
	function showTab(n) {
  // This function will display the specified tab of the form...
  		var x = document.getElementsByClassName("tab");
  		x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  		if (n == 0) {
    		document.getElementById("prevBtn").style.display = "none";
  		} else {
    		document.getElementById("prevBtn").style.display = "inline";
  		}
  		if (n >= (x.length - 1)) {
    		document.getElementById("nextBtn").style.display = "none";
  		} else {
    		document.getElementById("nextBtn").style.display = "inline";
  		}
  //... and run a function that will display the correct step indicator:
  		fixStepIndicator(n)
	}

	function nextPrev(n) {
  // This function will figure out which tab to display
  		var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  		if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  		x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  		currentTab = currentTab + n;
  // if you have reached the end of the form...
  		if (currentTab >= x.length) {
    // ... the form gets submitted:
    		document.getElementById("card").submit();
    		return false;
  		}
  // Otherwise, display the correct tab:
  		showTab(currentTab);
	}

	function validateForm() {
  // This function deals with validation of the form fields
  		var x, y, i, valid = true;
  		x = document.getElementsByClassName("tab");
  		y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  		//for (i = 0; i < y.length; i++) {
    // If a field is empty...
    		//if (y[i].value == "") {
      // add an "invalid" class to the field:
      			//y[i].className += " invalid";
      // and set the current valid status to false
      			//valid = false;
    		//}
  		//}
  // If the valid status is true, mark the step as finished and valid:
  		if (valid) {
    		document.getElementsByClassName("step")[currentTab].className += " finish";
  		}
  		return valid; // return the valid status
	}

	function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  		var i, x = document.getElementsByClassName("step");
  		for (i = 0; i < x.length; i++) {
    		x[i].className = x[i].className.replace(" active", "");
  		}
  //... and adds the "active" class on the current step:
  		x[n].className += " active";
	} 
</script>
</html>