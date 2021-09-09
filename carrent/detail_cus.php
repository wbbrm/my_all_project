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
        <p>&nbsp</p>
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
        <h1>ข้อมูลลูกค้า</h1>
        <div class="card">
            <table>
                <tr>
                    <th width="100"><div align="center">รหัสประจำตัวประชาชน</th>
                    <th width="500"><div align="center">ชื่อ</th>
                    <th width="100"><div align="center">เบอร์โทรศัพท์</th>
                    <th width="500"><div align="center">ที่อยู่</th>
                </tr>
                <?php
                include('connect.php');
                $sql = "SELECT * FROM customer ORDER BY id";
                $query = mysqli_query($conn, $sql); 
                while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) { ?>
                <tr>
                    <td align="center"><?php echo $result["ID_card"];?></td>
                    <td align="center"><?php echo $result["Firstname_cus"]; echo "&nbsp&nbsp&nbsp"; echo $result["Lastname_cus"];?></td>
                    <td align="center"><?php echo $result["Phonenumber_cus"];?></td>
                    <td align="center"><?php echo $result["Address_cus"];?></td>
                </tr>
                <?php
                    }
                ?>
            </table>
            <?php
            mysqli_close($conn);
            ?>
            <div align="right">
                <a href="admin.php" class="button">กลับ</a>
            </div>
        </div>
    </body>
</html>