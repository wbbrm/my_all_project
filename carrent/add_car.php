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
  <h1>ข้อมูลรถ>เพิ่ม</h1>
  <div class="row">
    <div class="card">
      <form action="insert_car.php?Action=Save" method="post" enctype="multipart/form-data" name="car" id="car">
        <div class="leftcolumn2">
          <table>
            <tr>
              <th>เลขตัวถัง :&nbsp</th>
              <td><input type="text" name="txtbodynumber" placeholder="Enter Bodynumber" required></td>
              <th>เลขทะเบียน :&nbsp</th>
              <td><input type="text" name="txtlicense_plate" placeholder="Enter License Plate" required></td>
              <th>ราคา / วัน :&nbsp</th>
              <td><input type="text" name="txtprice" placeholder="Enter Price" required></td>
            </tr>
            <tr>
              <th>ยี่ห้อ :&nbsp</th>
              <td><select name="txtbrand" required>
                <option value="">--select--</option>
                    <option value="Audi">Audi</option>
                    <option value="BMW">BMW</option>
                    <option value="Honda">Honda</option>
                    <option value="Isuzu">Isuzu</option>
                    <option value="Lamborghin">Lamborghin</option>
                    <option value="Mercedes">Mercedes</option>
                    <option value="MG">MG</option>
                    <option value="Nissan">Nissan</option>
                    <option value="Suzuki">Suzuki</option>
                    <option value="Toyota">Toyota</option>
              </select></td>
              <th>รุ่น :&nbsp</th>
              <td><input type="text" name="txtgeneration" placeholder="Enter Generation" required></td>
              <th>สี :&nbsp</th>
              <td><input type="text" name="txtcolor"  placeholder="Enter Color" required></td>
            </tr>
            <tr>
              <th>ประเภทเกียร์ :&nbsp</th>
                  <td><select name="txtgeartype" required>
                    <option value="">--select--</option>
                    <option value="AUTO">AUTO</option>
                    <option value="กระปุก">กระปุก</option>
                  </select></td></td>
              <th>จำนวนผู้โดยสาร :&nbsp</th>
              <td><input type="text" name="txtpassenger" placeholder="Enter Passenger" required></td>
              <th>ประเภทรถ :&nbsp</th>
                  <td><select name="txtcartype" required>
                    <option value="">--select--</option>
                    <option value="Eco Car">Eco Car</option>
                    <option value="Luxury">Luxury</option>
                    <option value="SUV">SUV</option>
                    <option value="Van">Van</option>
                    <option value="รถเก๋ง">รถเก๋ง</option>
                  </select></td>
                </tr>
                <tr>
              <th>รายละเอียด :&nbsp</th>
              <td><input type="text" name="txtdetail" placeholder="Enter Detail" required></td>
            </tr>
          </table>
        </div>
        <div class="rightcolumn2">
          <p>File Browser</p>
          <label>
            <img id="img" src="" width="300"><br>
            <input type="file" name="file" id="file" OnChange="Preview(this)" required="required">
          </label>
        </div>
        <button type="submit" name="button" class="button">ยืนยัน</button>
        <a href="detail_car.php" class="button">กลับ</a>
      </form>
    </div>
  </div>
</body>
</html>