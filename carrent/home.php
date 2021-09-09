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
        <div class="topnav"><b>
            <a class="active" href="home.php">หน้าหลัก</a>
            <a href="rental.php">เช่ารถ</a>
            <a href="how_to.php">วิธีการเช่า</a>
            <a href="contact.php">ติดต่อเรา</a>
            <div align="right">
            <button class="button3" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><b>เข้าสู่ระบบ</b></button>
            </div>
            <div id="id01" class="modal">
                <form class="modal-content animate" action="login.php" method="post">
                    <div align="center">
                        <h4><b>เข้าสู่ระบบ</b></h4>
                    </div>
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <img src="img/profile.png" alt="Avatar" class="avatar">
                    </div>
                    <div class="container">
                        <label for="txtusername" style="color: #6495ED;"><b>Username&nbsp</b></label>
                        <input type="text" placeholder="Enter Username" name="txtusername" required>
                        <br>
                        <label for="txtpassword" style="color: #6495ED;"><b>Password&nbsp</b></label>
                        <input type="password" placeholder="Enter Password" name="txtpassword" required>
                        <br>
                        <div align="center">
                            <button class="button" type="submit" id="rcorners2"><b>ยืนยัน</b></button>
                            <button onclick="document.getElementById('id01').style.display='none'" class="button" id="rcorners2"><b>ยกเลิก</b></button>
                        </div>
                    </div>
                </form>
            </div>
            <script>
                // Get the modal
                var modal = document.getElementById('id01');
                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                    modal.style.display = "none";
                    }
                }
            </script>
        </b></div>
        <h2>หน้าหลัก</h2>
        <div class="row">
            <div class="column2">
                <div class="card">
                    PROMOTION
                </div>
            </div>
            <div class="column2">
                <div class="card">
                    ประเภทรถที่นิยมเช่า
                </div>
            </div>
        </div>   
    </body>
</html>