<?php session_start(); ?>
<!DOCTYPE html>
<html lang="th">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/road-sign.ico.png"/>
    <link href="https://fonts.googleapis.com/css?family=Athiti&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>CARRENTAAA</title>
    <head>
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
        <ul><b>
            <li><a href="logout.php">ออกจากระบบ</a></li>
            <li><?php echo $_SESSION['user']; ?></li>
        </b></ul>
        <h2>ข้อมูลรถ</h2>
        <div class="card">
            <div align="center">
                <a href="add_car.php" class="button2">เพิ่มข้อมูล</a>
                <a href="admin.php" class="button2">กลับ</a>
            </div>
            <table>
                <tr>
                    <th width="100"><div align="center">ยี่ห้อ</th>
                    <th width="100"><div align="center">รุ่น</th>
                    <th width="100"><div align="center">เลขตัวถัง</th>
                    <th width="100"><div align="center">ทะเบียนรถ</th>
                    <th width="100"><div align="center">ปรเภทรถ</th>
                    <th width="100"><div align="center">ประเภทเกียร์</th>
                    <th width="100"><div align="center">สี</th>
                    <th width="100"><div align="center">จำนวนผู้โดยสาร</th>
                    <th width="100"><div align="center">รายละเอียด</th>
                    <th width="100"><div align="center">ราคา / วัน</th>
                    <th width="100"><div align="center">ชื่อรูป</th>
                    <th width="100"><div align="center">รูปภาพ</th>
                    <th width="100"><div align="center">จัดการข้อมูล</th>
                </tr>
                <?php
                include('connect.php');
                $sql = "SELECT * FROM car ORDER BY Brand";
                $query = mysqli_query($conn, $sql); 
                while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) { ?>
                <tr>
                    <td align="center"><?php echo $result["Brand"];?></td>
                    <td align="center"><?php echo $result["Generation"];?></td>
                    <td align="center"><?php echo $result["Bodynumber"];?></td>
                    <td align="center"><?php echo $result["License_plate"];?></td>
                    <td align="center"><?php echo $result["Car_type"];?></td>
                    <td align="center"><?php echo $result["Geartype"];?></td>
                    <td align="center"><?php echo $result["Color"];?></td>
                    <td align="center"><?php echo $result["Passenger"];?></td>
                    <td align="center"><?php echo $result["Detail"];?></td>
                    <td align="center"><?php echo $result["Price"];?></td>
                    <td align="center"><?php echo $result["Picture"];?></td>
                    <td align="center"><img src='img/<?php echo $result['Picture'];?>' width=100></td>
                    <td align="center"><a href="edit_car.php<?php echo '?id='.$result['id']; ?>">แก้ไข</a>&nbsp&nbsp&nbsp<a href="delete_emp.php<?php echo '?id='.$result['id']; ?>">ลบ</a></td>
                </tr>
                <?php
                    }
                ?>
            </table>
            <?php
            mysqli_close($conn);
            ?>
        </div>
    </body>
</html>