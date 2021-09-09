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
        <h2>ข้อมูลพนักงาน</h2>
        <div class="card">
            <table>
                <tr>
                    <th width="100"><div align="center">รหัสพนักงาน</th>
                    <th width="500"><div align="center">ชื่อพนักงาน</th>
                    <th width="100"><div align="center">เบอร์โทรศัพท์</th>
                    <th width="500"><div align="center">ที่อยู่</th>
                    <th width="100"><div align="center">รหัสแผนก</th>
                    <th width="100"><div align="center">วันที่สังกัด</th>
                    <th width="100"><div align="center">วันที่ลาออก</th>
                </tr>
                <?php
                include('connect.php');
                $sql = "SELECT * FROM employee ORDER BY id";
                $query = mysqli_query($conn, $sql); 
                while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) { ?>
                <tr>
                    <td align="center"><?php echo $result["ID_emp"];?></td>
                    <td align="center"><?php echo $result["Firstname_emp"]; echo "&nbsp&nbsp&nbsp"; echo $result["Lastname_emp"];?></td>
                    <td align="center"><?php echo $result["Phonenumber_emp"];?></td>
                    <td align="center"><?php echo $result["Address_emp"];?></td>
                    <td align="center"><?php echo $result["ID_dep"];?></td>
                    <td align="center"><?php echo $result["Affiliation_date"];?></td>
                    <td align="center"><?php echo $result["Resignation_date"];?></td>
                    <td align="center"><a href="edit_emp.php<?php echo '?id='.$result['id']; ?>">แก้ไข</a>&nbsp&nbsp&nbsp<a href="delete_emp.php<?php echo '?id='.$result['id']; ?>">ลบ</a></td>
                </tr>
                <?php
                    }
                ?>
            </table>
            <?php
            mysqli_close($conn);
            ?>
            <a href="add_emp.php" class="button">เพิ่มข้อมูล</a>
            <a href="admin.php" class="button">กลับ</a>
        </div>
    </body>
</html>