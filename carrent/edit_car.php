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
            <script type="text/javascript">
        function Preview(ele) {
          $('#img').attr('src', ele.value);
          if (ele.files && ele.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
              $('#img').attr('src', e.target.result);
            }
            reader.readAsDataURL(ele.files[0]);
          }
        }
      </script>
        </div>
    </head>
    <body>
        <ul><b>
            <li><a href="logout.php">ออกจากระบบ</a></li>
            <li><?php echo $_SESSION['user']; ?></li>
        </b></ul>
      <h2>ข้อมูลรถ>แก้ไข</h2>
      <div class="row">
        <div class="card">
          <?php include 'connect.php';
          $get_id = $_REQUEST['id'];
          $sql = "SELECT * FROM car WHERE id = '". $get_id."'";
          $query = mysqli_query($conn,$sql);
          $result=mysqli_fetch_array($query,MYSQLI_ASSOC);
          ?>
          <form action="update_car.php?Action=Save" method="post" enctype="multipart/form-data" name="car" id="car">
            <div class="leftcolumn2">
              <table>
                <input type="hidden" name="get_id" size="20" value="<?php echo  $get_id;?>">
                <tr>
                  <th>เลขตัวถัง :&nbsp</th>
                  <td><input type="text" name="txtbodynumber" value="<?php echo $result["Bodynumber"];?>"></td>
                  <th>เลขทะเบียน :&nbsp</th>
                  <td><input type="text" name="txtlicense_plate" value="<?php echo $result["License_plate"];?>"></td>
                  <th>ราคา / วัน :&nbsp</th>
                  <td><input type="text" name="txtprice" value="<?php echo $result["Price"];?>"></td>
                </tr>
                <tr>
                  <th>ยี่ห้อ :&nbsp</th>
                  <td><?php echo $result["Brand"];?>
                    <select name="txtbrand">
                    <option value="<?php echo $result["Brand"];?>">--select--</option>
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
                  <td><input type="text" name="txtgeneration" value="<?php echo $result["Generation"];?>"></td>
                  <th>สี :&nbsp</th>
                  <td><input type="text" name="txtcolor" value="<?php echo $result["Color"];?>"></td>
                </tr>
                <tr>
                  <th>ประเภทเกียร์ :&nbsp</th>
                  <td><?php echo $result["Geartype"];?>
                    <select name="txtgeartype">
                    <option value="<?php echo $result["Geartype"];?>">--select--</option>
                    <option value="AUTO">AUTO</option>
                    <option value="กระปุก">กระปุก</option>
                  </select></td>
                  <th>จำนวนผู้โดยสาร :&nbsp</th>
                  <td><input type="text" name="txtpassenger" value="<?php echo $result["Passenger"];?>"></td>
                  <th>ประเภทรถ :&nbsp</th>
                  <td>
                    <?php echo $result["Car_type"];?>
                    <select name="txtcartype">
                    <option value="<?php echo $result["Cartype"];?>">--select--</option>
                    <option value="Eco Car">Eco Car</option>
                    <option value="Luxury">Luxury</option>
                    <option value="SUV">SUV</option>
                    <option value="Van">Van</option>
                    <option value="รถเก๋ง">รถเก๋ง</option>
                  </select></td>
                </tr>
                <tr>
                  <th>รายละเอียด :&nbsp</th>
                  <td><input type="text" name="txtdetail" value="<?php echo $result["Detail"];?>"></td>
                </tr>
              </table>
            </div>
            <div class="rightcolumn2">
              <p>File Browser</p>
              <label>
                <img id="img" src='img/<?php echo $result['Picture'];?>' width="300"><br>
                <input type="file" name="file" id="file" OnChange="Preview(this)">
              </label>
            </div>
            <button type="submit" name="button" class="button">ยืนยัน</button>
            <a href="detail_car.php" class="button">กลับ</a>
          </form>
        </div>
      </div>
    </body>
</html>