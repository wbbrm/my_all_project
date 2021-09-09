<!DOCTYPE html>
<html lang="th">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CARRENT AAA | ติดต่อเรา</title>
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
            <br>
            <a href="admin.php">เข้าสู่ระบบ</a>
        </div>
    </head>
    <body>
        <div class="topnav"><b>
            <a href="home.php">หน้าหลัก</a>
            <a href="rental.php">เช่ารถ</a>
            <a href="how_to.php">วิธีการเช่า</a>
            <a href="contact.php">ติดต่อเรา</a>
        </b></div>
        <h1>ชำระเงิน</h1>
        <div class="card">
        <div class="a" align=center>โอนเงินผ่านบัญชี<br>บัญชีธนาคาร : 111-0-11100-1<br>ชื่อบัญชี : นายจตุรงศ์ ยุวดำรงชัย<br>ธนาคาร : กสิกรไทย<br><br>
        <a href="rental.php" class="button"><b>ยืนยันการชำระเงิน</b></a>
        <a href="confirm_car.php" class="button"><b>กลับ</b></a>
        </div></div>
        </body>
        </html>