<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="th-TH">
<head>
	<title>ระบบค้นหาข้อมูลเห็ด-ข้อมูลเห็ด</title>
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
	<style>
		.block {
			background-color: #F5E8DC;
			box-shadow: 0px 3px 3px rgba(0, 0, 0, 0.25);
        	color: #656565;
		}

        .button {
            background-color: #F5E8DC;
            color: #656565;
            padding: 14px 16px;
            text-align: center;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.25);
            text-decoration: none;
            border: none;
        }

        h3 {
            color: #583D28;
            font-family: 'ABeeZee','Kanit', sans-serif;
        }

        .modal-content {background-color: #F5E8DC;}

        .modal-footer, .modal-header {border: none;}

        .canclebtn {
            background: #583D28;
            border: none;
            border-radius: 5px;
            color: #FFFFFF;
            font-family: 'ABeeZee','Kanit', sans-serif;
            padding: 5px 10px 2px 10px;
            text-align: center;
            text-decoration: none;
        }

        .canclebtn:hover {background: red;}

        button[type=submit]:hover {background: green;}
	</style>
	<?php include ('navbar.php'); ?>
    <div class="container-fluid py-5 my-5" style="background-color: #FAF5EB;">
    	<?php
            include 'connect.php';
        	$id = $_GET['id'];
        	$sql = "SELECT * FROM mushroom,mushroomfamily WHERE mushroomfamily.MushroomFamily_Id = mushroom.MushroomFamily_Id AND mushroom.Mushroom_Id = '$id';";
        	$query = mysqli_query($conn,$sql);
        	$result = mysqli_fetch_array($query,MYSQLI_ASSOC);
    	?>
    	<div class="row">
    		<div class="col-sm-3 p-5">
    			<img src="img/mushroom/<?php echo $result['Mushroom_icon'];?>" width="300px" style="border: 16px solid #F5E8DC;box-shadow: 0px 3px 3px rgba(0, 0, 0, 0.25);" data-toggle="modal" data-target="#modalimg"><br><br><br>
                <div align="center"><a href="#modallocation" class="button" data-toggle="modal">ดูพิกัด</a></div>
                <div id="modalimg" class="modal fade">
                    <div class="modal-dialog">
                        <span class="close text-white">&times;</span>
                        <div class="modal-content">
                            <img src="img/mushroom/<?php echo $result['Mushroom_icon'];?>" id="fullimg" style="width:100%">
                        </div>
                    </div>
                </div>
                <div id="modallocation" class="modal fade">
                    <div class="modal-dialog">
                        <form action="login_location.php?id=<?=$result["Mushroom_Id"]?>" method="post">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3>ลงชื่อเข้าสู่ระบบ</h3>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <input class="form-control-plaintext p-1" style="margin-bottom: -2px;border-bottom-right-radius: 0;border-bottom-left-radius: 0;" type="text" placeholder="ชื่อผู้ใช้" name="txtusername" required>
                                    <input class="form-control-plaintext p-1" style="border-top-left-radius: 0;border-top-right-radius: 0;" type="password" placeholder="รหัสผ่าน" name="txtpassword" required><br>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit">เข้าสู่ระบบ</button>
                                    <button class="canclebtn" data-dismiss="modal">ยกเลิก</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
    		</div>
            <div class="block col-sm-8 m-5 p-5">
                <div class="row">
                    <div class="col">
                        <table>
                            <tr>
                                <th>ชื่อเห็ด :&nbsp</th>
                                <td><?php echo $result["Mushroom_name"];?></td>
                            </tr>
                            <tr>
                                <th>ชื่อท้องถิ่น :&nbsp</th>
                                <td><?php echo $result["Mushroom_localname"];?></td>
                            </tr>
                            <tr>
                                <th>ชื่อสามัญ :&nbsp</th>
                                <td><?php echo $result["Mushroom_commonname"];?></td>
                            </tr>
                            <tr>
                                <th>ชื่อวิทยาศาสตร์ :&nbsp</th>
                                <td><?php echo $result["Mushroom_science"];?></td>
                            </tr>
                            <tr>
                                <th>ชนิดของเห็ด :&nbsp</th>
                                <td><?php echo $result["Mushroom_type"];?></td>
                            </tr>
                            <tr>
                                <th>แหล่งที่อยู่ :&nbsp</th>
                                <td><?php echo $result["Mushroom_habitat"];?></td>
                            </tr>
                            <tr>
                                <th>การเจริญเติบโต :&nbsp</th>
                                <td><?php echo $result["Mushroom_growth"];?></td>
                            </tr>
                            <tr>
                                <th>การใช้ประโยชน์ :&nbsp</th>
                                <td><?php echo $result["Mushroom_benefit"];?></td>
                            </tr>
                            <tr>
                                <th>สรุป :&nbsp</th>
                                <td><?php echo $result["Mushroom_description"];?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col">
                        <table>
                            <tr>
                                <th>ลักษณะด้านบนหมวกเห็ด :&nbsp</th>
                            </tr>
                            <tr>
                                <td><img src="img/cap_up/<?php echo $result["Cap_up"];?>" width="90px"></td>
                            </tr>
                            <tr>
                                <th>ลักษณะด้านข้างหมวกเห็ด :&nbsp</th>
                            </tr>
                            <tr>
                                <td><img src="img/cap_side/<?php echo $result["Cap_side"];?>" width="90px"></td>
                            </tr>
                            <tr>
                                <th>ลักษณะตรงกลางหมวกเห็ด :&nbsp</th>
                            </tr>
                            <tr>
                                <td><img src="img/cap_center/<?php echo $result["Cap_center"];?>" width="90px"></td>
                            </tr>
                            <tr>
                                <th>ลักษณะขอบหมวก :&nbsp</th>
                            </tr>
                            <tr>
                                <td><img src="img/cap_margin/<?php echo $result["Cap_margin"];?>" width="90px"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
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