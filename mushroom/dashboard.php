<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="th-TH">
<head>
	<title>MushroomFinder-Dashboard</title>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKb9-BF6y7fAD_s3s-or9knbdzInJdubw&callback=initMap&libraries=&v=weekly" async></script>
</head>
<body>
    <?php
        if ($_SESSION["user"]) {
    ?>
	<style>
		.block {
			background-color: #F5E8DC;
			box-shadow: 0px 3px 3px rgba(0, 0, 0, 0.25);
        	color: #656565;
        	margin: 5px;
        	padding: 5px;
		}

        table {
            width: 100%;
            margin: 16px 0;
        }

        th {
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

        #map {
            height: 400px;
            width: 100%;
	</style>
	<?php include 'nav.php'; include 'logout_modal.php'; ?>
	<div class="w3-main" style="margin-left:200px;margin-top:43px;padding-left: 20px;padding-right: 20px;">
		<header class="w3-container" style="padding-top:22px">
    		<h5><b></b></h5>
  		</header>
		<div class="row">
			<div class="block col-sm">
				<div class="container-sm m-1">
					<div class="w3-left">เห็ดทั้งหมด</div>
					<div class="w3-right">
						<?php 
                            include('connect.php');
                            $sql1 = "SELECT COUNT(MushroomLocationId) AS all_mushroom FROM area" or die("Error:" . mysqli_error());
                            $query1 = mysqli_query($conn, $sql1);
                            while ($result1 = mysqli_fetch_assoc($query1)) {
                                echo $result1['all_mushroom'];
                            }
                            mysqli_close($conn);
                        ?>
					</div>
				</div>
			</div>
			<div class="block col-sm">
				<div class="container-sm m-1">
					<div class="w3-left">เห็ดกินได้</div>
					<div class="w3-right">
						<?php 
                            include('connect.php');
                            $sql2 = "SELECT COUNT(MushroomLocationId) AS edible FROM area WHERE status = 'กินได้'" or die("Error:" . mysqli_error());
                            $query2 = mysqli_query($conn, $sql2);
                            while ($result2 = mysqli_fetch_assoc($query2)) {
                                echo $result2['edible'];
                            }
                            mysqli_close($conn);
                        ?>
					</div>
				</div>
			</div>
			<div class="block col-sm">
				<div class="container-sm m-1">
					<div class="w3-left">เห็ดกินไม่ได้</div>
					<div class="w3-right">
						<?php 
                            include('connect.php');
                            $sql3 = "SELECT COUNT(MushroomLocationId) AS inedible FROM area WHERE status = 'กินไม่ได้'" or die("Error:" . mysqli_error());
                            $query3 = mysqli_query($conn, $sql3);
                            while ($result3 = mysqli_fetch_assoc($query3)) {
                                echo $result3['inedible'];
                            }
                            mysqli_close($conn);
                        ?>
					</div>
				</div>
			</div>
			<div class="block col-sm">
				<div class="container-sm m-1">
					<div class="w3-left">เห็ดพิษ</div>
					<div class="w3-right">
						<?php 
                            include('connect.php');
                            $sql4 = "SELECT COUNT(MushroomLocationId) AS poisonous FROM area WHERE status = 'มีพิษ'" or die("Error:" . mysqli_error());
                            $query4 = mysqli_query($conn, $sql4);
                            while ($result4 = mysqli_fetch_assoc($query4)) {
                                echo $result4['poisonous'];
                            }
                            mysqli_close($conn);
                        ?>
					</div>
				</div>
			</div>
			<div class="block col-sm">
				<div class="container-sm m-1">
					<div class="w3-left">ไม่ทราบชนิด</div>
					<div class="w3-right">
						<?php 
                            include('connect.php');
                            $sql5 = "SELECT COUNT(Mushroom_Id) AS unknow FROM area WHERE status = 'ไม่ทราบชนิด'" or die("Error:" . mysqli_error());
                            $query5 = mysqli_query($conn, $sql5);
                            while ($result5 = mysqli_fetch_assoc($query5)) {
                                echo $result5['unknow'];
                            }
                            mysqli_close($conn);
                        ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col" id="tablemushroom">
				<table>
					<thead>
						<input type="text" id="filter" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
					</thead>
					<tr>
						<th>รหัส</th>
						<th>ชื่อ</th>
						<th>&nbsp</th>
					</tr>
					<?php
						include 'connect.php';
						$sql = "SELECT * FROM mushroom ORDER BY Mushroom_Id";
						$query = mysqli_query($conn,$sql);
						while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
	            	?>
    	        	<tr>
        	    		<td><?php echo $result["Mushroom_Id"];?></td>
            			<td><?php echo $result["Mushroom_name"];?></td>
    	        		<td>
    	        			<a href="edit_mushroom.php?id=<?=$result['Mushroom_Id']?>">แก้ไขข้อมูล</a><br>
    	        			<a href="#modaldel<?=$result['Mushroom_Id']?>" data-toggle="modal">ลบข้อมูล</a><br>
    	        			<a href="add_location.php?id=<?=$result['Mushroom_Id']?>">เพิ่มบริเวณที่พบ</a>
    	        		</td>
                        <div class="modal fade" id="modaldel<?=$result['Mushroom_Id']?>">
    	        			<div class="modal-dialog">
    	        				<div class="modal-content">
    	        					<div class="modal-header">
    	        						<h3>ต้องการลบข้อมูลนี้หรือไม่ ?</h3>
    	        						<button class="close" data-dismiss="modal">&times;</button>
    	        					</div>
    	        					<div class="modal-body">
    	        						<?=$result["Mushroom_Id"]?>
    	        					</div>
    	        					<div class="modal-footer">
    	        						<form action="del_mushroom.php?id=<?=$result['Mushroom_Id']?>" method="post">
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
            <div class="col" id="tablelocation">
                <?php
                    include("connect.php");
                    $sql = "SELECT * FROM zone,area,mushroom  WHERE  zone.Zone_Id = area.Zone_Id  AND  area.Mushroom_Id = mushroom.Mushroom_Id;";
                    $query = mysqli_query($conn,$sql);
                ?>
                <div align="center">
                    <div id="map"></div>
                </div>
                <table>
                    <tr>
                        <th>รหัสตำแหน่งเห็ด</th>
                        <th>ละติจูด</th>
                        <th>ลองจิจูด</th>
                        <th>วันที่อัพเดท</th>
                        <th>&nbsp</th>
                    </tr>
                    <?php
                        $i = 1;
                        $data = "";
                        while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
                            $data = $data . " :: " . $result["MushroomLocationId"];
                            $latitudeX = $result["LatitudeX"] ;
                            $longitudeY = $result["LongitudeY"] ;
                            $locations[] = array($i, $data, $latitudeX, $longitudeY, 13);
                            ++$i;
                    ?>
                    <tr>
                        <td><?php echo $result["MushroomLocationId"];?></td>
                        <td><?php echo $result["LatitudeX"];?></td>
                        <td><?php echo $result["LongitudeY"];?></td>
                        <td><?php echo $result["Status_date"];?></td>
                        <td>
                            <a href="edit_location.php?id=<?=$result['MushroomLocationId']?>">แก้ไขบริเวณที่พบ</a><br>
                            <a href="#modaldellocate<?=$result['MushroomLocationId']?>" data-toggle="modal">ลบบริเวณที่พบ</a>
                            <div class="modal fade" id="modaldellocate<?=$result['MushroomLocationId']?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3>ต้องการลบข้อมูลนี้หรือไม่ ?</h3>
                                            <button class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <?=$result["MushroomLocationId"]?>
                                        </div>
                                        <div class="modal-footer">
                                            <form action="del_location.php?id=<?=$result['MushroomLocationId']?>" method="post">
                                                <button class="confirmbtn" type="submit" style="font-size: 20px">ยืนยัน</button>
                                            </form>
                                            <button class="canclebtn" data-dismiss="modal" style="font-size: 20px">ยกเลิก</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
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
    <script>
        function detectBrowser() {
            /*var useragent = navigator.userAgent;
            var mapdiv = document.getElementById("map");
            if (useragent.indexOf('iPhone') != -1 || useragent.indexOf('Android') != -1 ) {
                mapdiv.style.width = '100%';
                mapdiv.style.height = '100%';
            } else {
                mapdiv.style.width = '600px';
                mapdiv.style.height = '800px';
            }*/
        }

        var map; // กำหนดตัวแปร map ไว้ด้านนอกฟังก์ชัน เพื่อให้สามารถเรียกใช้งาน จากส่วนอื่นได้
        var GGM; // กำหนดตัวแปร GGM ไว้เก็บ google.maps Object จะได้เรียกใช้งานได้ง่ายขึ้น
        var infowindow=[]; // กำหนดตัวแปรสำหรับเก็บตัว popup แสดงรายละเอียดสถานที่
        var infowindowTmp; // กำหนดตัวแปรสำหรับเก็บลำดับของ infowindow ที่เปิดล่าสุด
        var my_Marker=[]; // กำหนดตัวแปรสำหรับเก็บตัว marker เป็นตัวแปร array  
        var markerID=[];  // ประกาศเป็น arrray สำหรับเก็บค่า id
        var markerName=[];  // ประกาศเป็น arrray สำหรับเก็บค่า name
        var markerLat=[]; // ประกาศเป็น arrray สำหรับเก็บ latitude
        var markerLng=[]; // ประกาศเป็น arrray สำหรับเก็บ longitude
        var markerDate=[]; // ประกาศเป็น arrray สำหรับเก็บ datetime
        var markerIcons=[]; // ประกาศเป็น arrray สำหรับเก็บ icon
        var markerLatLng=[]; // ประกาศเป็น arrray สำหรับเก็บ พิกัดในรูปแบบของ google map
        var contentData=[]; // ประกาศเป็น arrray สำหรับเก็บ เนื้อหาของแต่ละ icon
        var image1=[]; // ประกาศเป็น arrray สำหรับเก็บ icons ในรูปแบบของ google map
 
        function initialize() { // ฟังก์ชันแสดงแผนที่
            detectBrowser();
            GGM=new Object(google.maps); // เก็บตัวแปร google.maps Object ไว้ในตัวแปร GGM
            // กำหนดจุดเริ่มต้นของแผนที่
            var my_Latlng  = new GGM.LatLng(<?=$latitudeX?>,<?=$longitudeY?>);
            // กำหนด DOM object ที่จะเอาแผนที่ไปแสดง ที่นี้คือ div id=map_canvas
            var my_DivObj=$("#map")[0]; 
            // กำหนด Option ของแผนที่
            var myOptions = {
                //กำหนดขนาดการ zoom
                zoom: 14,
                // กำหนดจุดกึ่งกลาง
                center: my_Latlng ,
                // กำหนดรูปแบบแผนที่
                mapTypeId:GGM.MapTypeId.ROADMAP,
                // การจัดรูปแบบส่วนควบคุมประเภทแผนที่
                mapTypeControlOptions:{
                    // จัดตำแหน่ง
                    position:GGM.ControlPosition.TOP,
                    // จัดรูปแบบ style
                    style:GGM.MapTypeControlStyle.DROPDOWN_MENU
                }
            };

            // สร้างแผนที่และเก็บตัวแปรไว้ในชื่อ map
            map = new GGM.Map(my_DivObj,myOptions);
            <?php foreach($locations as $index=>$value) { ?>
                markerName[<?php echo $index; ?>]='<?php echo $value[1]; ?>';     
                markerLat[<?php echo $index; ?>]=<?php echo $value[2]; ?>;  
                markerLng[<?php echo $index; ?>]=<?php echo $value[3]; ?>;        
                //markerIcons[<?php echo $index; ?>]='<i class="material-icons">add_location</i>';
                markerLatLng[<?php echo $index; ?>]=new GGM.LatLng(markerLat[<?php echo $index; ?>],markerLng[<?php echo $index; ?>]);
                // url ภาพ ใส่แบบเต็ม หรือแบบ path ก็ได้  
                //image1[<?php echo $index; ?>] = new GGM.MarkerImage(markerIcons[<?php echo $index; ?>],
                //new GGM.Size(50, 60),  //กำหนดความกว้าง สูงของ icons  
                //new GGM.Point(0,0),  // จุดเริ่มต้นของรูปภาพ ใช้ 0,0  
                //new GGM.Point(25, 60)  // จุดปลายของพิกัดเทียบกับรูป ปกติ (0,ความสูงของรูป) หรือ (ครึ่งหนึ่งความกว้างของรูป,ความสูงของรูป)
                //);

                // สร้างตัว marker
                my_Marker[<?php echo $index; ?>] = new GGM.Marker( {
                    // กำหนดไว้ที่เดียวกับจุดกึ่งกลาง
                    position:markerLatLng[<?php echo $index; ?>],
                    // เปลี่ยนเป็น icon ตามรูปภาพที่ดึงจาก xml
                    //icon: image1[<?php echo $index; ?>],
                    // กำหนดว่า marker นี้ใช้กับแผนที่ชื่อ instance ว่า map
                    map: map,
                    // แสดง title เมื่อเอาเมาส์มาอยู่เหนือ
                    title:markerName[<?php echo $index; ?>]
                });

                // จัดรูปแบบ เนื้อหาใน infowndow
                contentData[<?php echo $index; ?>]=markerName[<?php echo $index; ?>]+"<br/>"+markerLat[<?php echo $index; ?>]+","+markerLng[<?php echo $index; ?>];
                // สร้าง infowindow ของแต่ละ marker เป็นแบบ array
                infowindow[<?php echo $index; ?>] = new GGM.InfoWindow( {
                    // แสดงเนื้อหา ของแต่ละ icons
                    content: contentData[<?php echo $index; ?>] + "<br/><a href='https://www.google.com/maps/search/" + markerLat[<?php echo $index; ?>] + " , " + markerLng[<?php echo $index; ?>] + " /@ " + markerLat[<?php echo $index; ?>] + " , " + markerLng[<?php echo $index; ?>] + " ,13z?ht=th' target='_blank'>คลิกเพื่อดูใน Google Maps</a> "
                });

                // เมื่อคลิกตัว marker แต่ละตัว
                GGM.event.addListener(my_Marker[<?php echo $index; ?>], "click", function() {
                    // ให้ตรวจสอบว่ามี infowindow ตัวไหนเปิดอยู่หรือไม่
                    if(infowindowTmp!=null) {
                        // ถ้ามีให้ปิด infowindow ที่เปิดอยู่
                        infowindow[infowindowTmp].close();
                    }

                    // แสดง infowindow ของตัว marker ที่คลิก
                    infowindow[<?php echo $index; ?>].open(map,my_Marker[<?php echo $index; ?>]);
                    // เก็บ infowindow ที่เปิดไว้อ้างอิงใช้งาน
                    infowindowTmp=<?php echo $index; ?>;
                });

                //console.log($(this).find("id").text());
            <?php } ?>
        }

        $(function(){
            // โหลด สคริป google map api เมื่อเว็บโหลดเรียบร้อยแล้ว
            // ค่าตัวแปร ที่ส่งไปในไฟล์ google map api
            // v=3.2&sensor=false&language=th&callback=initialize
            //  v เวอร์ชัน่ 3.2
            //  sensor กำหนดให้สามารถแสดงตำแหน่งทำเปิดแผนที่อยู่ได้ เหมาะสำหรับมือถือ ปกติใช้ false
            //  language ภาษา th ,en เป็นต้น
            //  callback ให้เรียกใช้ฟังก์ชันแสดง แผนที่ initialize
            $("<script/>", {
                "type": "text/javascript",
                src: "//maps.google.com/maps/api/js?key=AIzaSyBKb9-BF6y7fAD_s3s-or9knbdzInJdubw&language=th&callback=initialize"
            }).appendTo("body");
        });
    </script>
	<?php
        } else {
            echo "<h1>กรุณาเข้าสู่ระบบ</h1>";
            echo "<a href='signin.php'>เข้าสู่ระบบ</a>";
        }
    ?>
</body>
</html>