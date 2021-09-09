<!DOCTYPE html>
<html lang="th">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CARRENT AAA | เช่ารถ</title>
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
            <a class="active" href="rental.php">เช่ารถ</a>
            <a href="how_to.php">วิธีการเช่า</a>
            <a href="contact.php">ติดต่อเรา</a>
        </b></div>
        <h2>เช่ารถ</h2>
        <div class="row">
            <div class="rightcolumn">
                <?php include 'connect.php'; 
                $sql5 = "SELECT * FROM car";
                $query5 = mysqli_query($conn,$sql5);
                while($result5 = mysqli_fetch_array($query5,MYSQLI_ASSOC)) 

                { 
                ?>
                 <div class="card">
                    <img src='img/<?php echo $result5['Picture'];?>' width=300>
                    <table>
                        <tr>
                            <th>ประเภทรถ :&nbsp</th>
                            <td><?php echo $result5["Car_type"];?></td>
                            <th>ราคา / วัน :&nbsp</th>
                            <td><?php echo $result5["Price"];?></td>
                        </tr>
                        <tr>
                            <th>ยี่ห้อ :&nbsp</th>
                            <td><?php echo $result5["Brand"];?></td>
                            <th>รุ่น :&nbsp</th>
                            <td><?php echo $result5["Generation"];?></td>
                            <th>สี :&nbsp</th>
                            <td><?php echo $result5["Color"];?></td>
                        </tr>
                        <tr>
                            <th>ประเภทเกียร์ :&nbsp</th>
                            <td><?php echo $result5["Geartype"];?></td>
                            <th>จำนวนผู้โดยสาร :&nbsp</th>
                            <td><?php echo $result5["Passenger"];?></td>
                            <th>รายละเอียด :&nbsp</th>
                            <td><?php echo $result5["Detail"];?></td>
                        </tr>
                    </table>
                    <div align="right">
                    <a href="rental_car.php<?php echo '?id='.$result5['id']; ?>" class="button">ดูรายละเอียด</a>
                </div>
                </div>
                <?php
                }
                ?>
            </div>
            <div class="leftcolumn">
                <div class="card">
                        <p><b>ประเภทรถยนต์</b></p>
                        <?php include 'connect.php';
                        $sql = "SELECT * FROM car GROUP BY Car_type";
                        $query = mysqli_query($conn,$sql);
                        while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
                        { 
                        ?>
                        <input type="radio" name="cartype" id="<?php echo $result['Car_type']; ?>" value="<?php echo $result['Car_type']; ?>" style="font-size: 14px;">
                        <label for="<?php echo $result['Car_type']; ?>"><?php echo $result['Car_type']; ?>&nbsp</label>
                        <?php
                        }
                        ?>
                        <p>
                        <b>ยี่ห้อ&nbsp&nbsp</b>
                        <select name="brand">
                            <option>--select--</option>
                            <?php include 'connect.php';
                            $sql = "SELECT * FROM car GROUP BY Brand";
                            $query = mysqli_query($conn,$sql);
                            while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
                            { 
                            ?>
                            <option value="<?php echo $result['Brand']; ?>"><?php echo $result["Brand"];?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <b>&nbsp&nbspประเภทเกียร์&nbsp&nbsp</b>
                        <select name="geartype">
                            <option>--select--</option>
                            <?php include 'connect.php';
                            $sql = "SELECT * FROM car GROUP BY Geartype";
                            $query = mysqli_query($conn,$sql);
                            while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
                            { 
                            ?>
                            <option value="<?php echo $result['Geartype']; ?>"><?php echo $result["Geartype"];?></option>
                            <?php
                            }
                            ?>
                        </select></p>
                        <p><b>จำนวนผู้โดยสาร&nbsp&nbsp</b>
                        <select name="passenger">
                            <option>--select--</option>
                            <?php include 'connect.php';
                            $sql = "SELECT * FROM car GROUP BY Passenger";
                            $query = mysqli_query($conn,$sql);
                            while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)) 
                            { 
                            ?>
                            <option value="<?php echo $result['Passenger']; ?>"><?php echo $result["Passenger"];?></option>
                            <?php
                            }
                            ?>
                        </select></p>
                        <p><b>ช่วงราคา</b></p>
                        <input type="text" name="minprice" style="width: 25%;">&nbsp-&nbsp
                        <input type="text" name="maxprice" style="width: 25%;">
                        <br>
                        <button>ค้นหา</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>