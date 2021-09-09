<!DOCTYPE html>
<html lang="th">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CARRENT AAA | วิธีการเช่า</title>
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
        <div class="topnav"><b>
            <a href="home.php">หน้าหลัก</a>
            <a href="rental.php">เช่ารถ</a>
            <a class="active" href="how_to.php">วิธีการเช่า</a>
            <a href="contact.php">ติดต่อเรา</a>
        </b></div>
        <div class="column">
            <div class="card" id="rcorners1">
                <h1>ขั้นตอนการเช่า</h1>
                <p>1. เลือกวันและเวลาที่ต้องการจองและคืนรถ</p>
                <p>2. เลือกรถที่ต้องการจอง</p>
                <p>3. กรอกรายละเอียดข้อมูลลูกค้า</p>
                <p>4. ทำการเช่าระเงินค่ามัดจำผ่านบัตรเครดิต</p>
                <p>5. พิมพ์เอกสารยืนยันการจอง</p>
                <p>6. นำเอกสารมายื่นกับทางร้านเพื่อทำการรับรถ</p>
            </div>
            <div class="card" id="rcorners1">
                <h1>เอกสารที่ต้องเตรียมมา</h1>
                <p>1. สำเนาบัตรประชาชน</p>
                <p>2. สำเนาใบขับขี่</p>
                <p>3. เอกสารยืนยันการจอง</p>
                <p>4. ค่ามัดจำรถ</p>
            </div>
        </div>
    </body>
</html>