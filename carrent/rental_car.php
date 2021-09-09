<!DOCTYPE html>
<html lang="th">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/road-sign.ico.png"/>
    <link href="https://fonts.googleapis.com/css?family=Athiti&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <head>
    	<title>CARRENTAAA</title>
      <h1><img src="img/road-sign.ico.png" width="50"> CARRENT AAA</h1>
      <div class="topright"><b id="date"></b> | <b id="time"></b>
            <script>
                var d = new Date();
                document.getElementById("date").innerHTML = d.toDateString();
                var myVar = setInterval(myTimer, 1000);
                function myTimer() {
                    var t = new Date();
                    document.getElementById("time").innerHTML = t.toLocaleTimeString();
                }
            </script>
        </div>
    </head>
    <body>
      <div class="topnav"><b>
            <a href="home.php">หน้าหลัก</a>
            <a class="active" href="rental.php">เช่ารถ</a>
            <a href="how_to.php">วิธีการเช่า</a>
            <a href="contact.php">ติดต่อเรา</a>
        </b></div>
      <h2>รายละเอียดรถ</h2>
      <div class="row">
        <div class="card">
          <?php include 'connect.php';
          $get_id = $_REQUEST['id'];
          $sql = "SELECT * FROM car WHERE id = '". $get_id."'";
          $query = mysqli_query($conn,$sql);
          $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
          ?>
          <div class="leftcolumn">
            <img src='img/<?php echo $result['Picture'];?>' width=300>
          </div>
          <div class="rightcolumn">
            <table>
                <tr>
                  <th>ประเภทรถ :&nbsp</th>
                  <td><?php echo $result["Car_type"];?></td>
                  <th>ราคา / วัน :&nbsp</th>
                  <td><?php echo $result["Price"];?></td>
                </tr>
                <br>
                <tr>
                  <th>ยี่ห้อ :&nbsp</th>
                  <td><?php echo $result["Brand"];?></td>
                  <th>รุ่น :&nbsp</th>
                  <td><?php echo $result["Generation"];?></td>
                  <th>สี :&nbsp</th>
                  <td><?php echo $result["Color"];?></td>
                </tr>
                <br>
                <tr>
                  <th>ประเภทเกียร์ :&nbsp</th>
                  <td><?php echo $result["Geartype"];?></td>
                  <th>จำนวนผู้โดยสาร :&nbsp</th>
                  <td><?php echo $result["Passenger"];?></td>
                  <th>รายละเอียด :&nbsp</th>
                  <td><?php echo $result["Detail"];?></td>
                </tr>
              </table>
          </div>
          <div align="center">
            <a href="confirm_car.php<?php echo '?id='.$result['id']; ?>" class="button">ยืนยัน</a>
            <a href="rental.php" class="button">กลับ</a>
          </div>
        </div>
      </div>
    </body>
</html>