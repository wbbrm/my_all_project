<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="th-TH">
<head>
	<title>MushroomFinder-ตารางวงศ์เห็ด</title>
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
        	$sql = "SELECT MushroomFamily_Id FROM mushroomfamily ORDER BY MushroomFamily_Id DESC";
    		$query = mysqli_query($conn,$sql);
    		if (mysqli_num_rows($query)<=0) {
        		return "001" ;
    		} else {
        		$result = mysqli_fetch_array($query);
        		$mushroomfamily = substr($result["MushroomFamily_Id"],-3);
    			$mushroomfamily = intval($mushroomfamily)+1;
				$mushroomfamily = str_pad($mushroomfamily,3,'0',STR_PAD_LEFT);
	    		return $mushroomfamily;
        	}
    	}
	?>
	<style>
		table {
            width: 100%;
            margin: 16px 0;
        }

        th{
            background-color: #CEB888;
            color: #000000;
            height: 50px;
            padding: 5px;
        }

        td {
            background-color: #F5E8DC;
            border-bottom: 1px solid #656565;
            color: #656565;
            padding: 5px;
        }
	</style>
	<?php include 'navbar_dashboard.php'; include 'logout_modal.php'; ?>
	<div class="w3-main" style="margin-left:200px;margin-top:43px;padding-left: 20px;padding-right: 20px;">
		<header class="w3-container" style="padding-top:22px;font-size: 25px;color: #583D28;">
    		ตารางวงศ์เห็ด
  		</header>
		<div class="row">
			<div class="col-xl-3">
				<form action="insert_family.php" method="post" enctype="multipart/form-data">
					<label for="txtname">ชื่อวงศ์ :</label>
					<input name="mushroom_family" type="hidden" value="<?=genkey()?>">
					<input name="txtname" type="text"><br>
					<div align="center" class="mt-1">
						<button type="submit">เพิ่ม</button>
					</div>
				</form>
			</div>
			<div class="col-xl-4">
				<table>
					<tr>
						<th>รหัสวงศ์</th>
						<th>ชื่อวงศ์</th>
						<th>&nbsp</th>
					</tr>
					<?php
						include 'connect.php';
						$sql = "SELECT * FROM mushroomfamily ORDER BY MushroomFamily_Id"; 
                		$query = mysqli_query($conn, $sql);
                		while ($result = mysqli_fetch_array($query)) {
	           		?>
					<tr>
						<td><?php echo $result["MushroomFamily_Id"];?></td>
						<td><?php echo $result["MushroomFamily_name"];?></td>
						<td>
    	        			<a href="#modaldel<?=$result['MushroomFamily_Id']?>" data-toggle="modal">ลบข้อมูล</a><br>
    	        		</td>
                        <div class="modal fade" id="modaldel<?=$result['MushroomFamily_Id']?>">
    	        			<div class="modal-dialog">
    	        				<div class="modal-content">
    	        					<div class="modal-header">
    	        						<h3>ต้องการลบข้อมูลนี้หรือไม่ ?</h3>
    	        						<button class="close" data-dismiss="modal">&times;</button>
    	        					</div>
    	        					<div class="modal-body">
    	        						<?=$result["MushroomFamily_Id"]?>
    	        					</div>
    	        					<div class="modal-footer">
    	        						<form action="del_family.php?id=<?=$result['MushroomFamily_Id']?>" method="post">
    	        							<button class="confirmbtn" type="submit" style="font-size: 20px">ยืนยัน</button>
    	        						</form>
    	        						<button class="canclebtn" data-dismiss="modal" style="font-size: 20px">ยกเลิก</button>
    	        					</div>
    	        				</div>
    	        			</div>
    	        		</div>
					</tr>
					<?php
            			}
           			?>
				</table>
				<?php
					mysqli_close($conn);
				?>
			</div>
		</div>
	</div>
	<?php
        } else {
            echo "<h1 style='font-family: 'ABeeZee','Kanit', sans-serif;'>กรุณาเข้าสู่ระบบ</h1>";
            echo "<a href='signin.php'>เข้าสู่ระบบ</a>";
        }
    ?>
</body>
</html>