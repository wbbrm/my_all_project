<?php session_start(); ?>
<!DOCTYPE html>
<html lang="th">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CARRENT AAA | หน้าหลัก</title>
    <link rel="shortcut icon" href="img/road-sign.ico.png"/>
    <link href="https://fonts.googleapis.com/css?family=Athiti&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
        <h2>เมนู</h2>
        <p><a href="#" class="button">สัญญาการเช่ารถ</a>
        <a href="detail_car.php" class="button">ข้อมูลรถ</a></p>
        <p><a href="#" class="button">ข้อมูลลูกค้า</a>
        <a href="detail_emp.php" class="button">ข้อมูลพนักงาน</a></p>
        <p><a href="#" class="button">รายงานต่างๆ</a></p>
    </body>
</html>
