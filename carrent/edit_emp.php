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
      <h2>ข้อมูลพนักงาน>แก้ไข</h2>
        <div class="card">
          <?php include 'connect.php';
          $get_id = $_REQUEST['id'];
          $sql = "SELECT * FROM employee WHERE id = '". $get_id."'";
          $query = mysqli_query($conn,$sql);
          $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
          ?>
          <form action="update_emp.php" method="post" enctype="multipart/form-data" name="emp" id="emp">
              <table>
                <input type="hidden" name="get_id" size="20" value="<?php echo  $get_id;?>">
                <tr>
                  <th>รหัสพนักงาน :&nbsp</th>
                  <td><input type="text" name="id_emp" value="<?php echo $result["ID_emp"];?>"></td>
                  <th>ชื่อ :&nbsp</th>
                  <td><input type="text" name="txtfirstname" value="<?php echo $result["Firstname_emp"];?>"></td>
                  <td><input type="text" name="txtlastname" value="<?php echo $result["Lastname_emp"];?>"></td>
                </tr>
                <tr>
                  <th>เบอร์โทรศัพท์ :&nbsp</th>
                  <td><input type="text" name="txtphonenumber" value="<?php echo $result["Phonenumber_emp"];?>"></td>
                  <th>ที่อยู่ :&nbsp</th>
                  <td><input type="text" name="txtaddress" value="<?php echo $result["Address_emp"];?>"></td>
                  <th>แผนก :&nbsp</th>
                  <td><?php echo $result["ID_dep"];?>
                  <select name="id_dep">
                    <option value="<?php echo $result["ID_dep"];?>">--select--</option>
                    <option value="121">121 แผนกดูแลเว็บ</option>
                    <option value="122">122 แผนกเอกสาร</option>
                    <option value="123">123 แผนกการเงิน</option>
                  </select></td>
                </tr>
                <tr>
                  <th>วันที่สังกัด :&nbsp</th>
                  <td><input type="date" name="date_in" value="<?php echo $result["Affiliation_date"];?>"></td>
                  <th>วันที่ลาออก :&nbsp</th>
                  <td><input type="date" name="date_out" value="<?php echo $result["Resignation_date"];?>"></td>
                </tr>
              </table>
            <button type="submit" name="button" class="button">ยืนยัน</button>
            <a href="detail_emp.php" class="button">กลับ</a>
          </form>
      </div>
    </body>
</html>