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
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKb9-BF6y7fAD_s3s-or9knbdzInJdubw&callback=initMap&libraries=&v=weekly" async></script>
</head>
<body>
	<style>
		/* Set the size of the div element that contains the map */
		#map {
			height: 400px;
			/* The height is 400 pixels */
			width: 100%;
			/* The width is the width of the web page */
		}
    </style>
	<?php include ('navbar.php'); ?>
    <div class="container-fluid py-5 my-5" style="background-color: #FAF5EB;">
    	<div class="row mt-3">
    		<div class="col-md-6">
    			<?php
					$id = $_GET['id'];
					include("connect.php");
					$sql = "SELECT * FROM zone,area,mushroom  WHERE  zone.Zone_Id = area.Zone_Id  AND  area.Mushroom_Id = mushroom.Mushroom_Id AND mushroom.Mushroom_Id = '$id';";
					$query = mysqli_query($conn,$sql);
					if(mysqli_num_rows($query)<=0) {
				?>
				<script>
					alert("map is not exist");
    				window.open('', '_self', '')
    				self.opener = this; 
					self.close(); 
				</script>
				<?php	  
					}
				?>
				<table>
					<tr>
						<th>รหัสตำแหน่งเห็ด</th>
						<th>บริเวณ</th>
						<th>ละติจูด</th>
						<th>ลองจิจูด</th>
						<th>วันที่อัพเดท</th>
						<th>&nbsp</th>
					</tr>
					<?php
						$i = 1;
						$data = "";
						while($result = mysqli_fetch_array($query)) {
							$data = $data . " :: " . $result["MushroomLocationId"];
							$latitudeX = $result["LatitudeX"] ;
							$longitudeY = $result["LongitudeY"] ;
							$locations[] = array($i, $data, $latitudeX, $longitudeY, 13);
							++$i;
					?>
					<tr>
						<td><?php echo $result["MushroomLocationId"];?></td>
            			<td><?php echo $result["Zone_description"];?></td>
	            		<td><?php echo $result["LatitudeX"];?></td>
    	        		<td><?php echo $result["LongitudeY"];?></td>
    	        		<td><?php echo $result["Status_date"];?></td>
        	    	</tr>
				</table>
				<?php
					}
				?>
			</div>
			<div class="col-md-6">
				<div id="map"></div>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-md-6 mx-3">
				<?php
					$id = $_GET['id'];
					include("connect.php");
					$sql = "SELECT * FROM mushroom ORDER BY Mushroom_Id";
					$query = mysqli_query($conn,$sql);
					$result = mysqli_fetch_array($query,MYSQLI_ASSOC);
				?>
				<a href="detail.php?id=<?=$result["Mushroom_Id"]?>">กลับ</a>
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
</body>
</html>