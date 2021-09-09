<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="th-TH">
<head>
    <title>MushroomFinder-แก้ไขบริเวณที่พบ</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/logo/logonotext.png"/>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=ABeeZee&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kanit:ital@1&display=swap">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
        if ($_SESSION["user"]) {
    ?>
    <?php include 'nav.php'; include 'logout_modal.php'; ?>
    <div class="w3-main" style="margin-left:200px;margin-top:43px;padding-left: 20px;padding-right: 20px;">
        <header class="w3-container" style="padding-top:22px;font-size: 25px;color: #583D28;">
            แก้ไขบริเวณที่พบ
        </header>
        <form action="update_location.php" method="post" enctype="multipart/form-data">
            <?php
                include 'connect.php';
                $id = $_GET['id'];
                $sql = "SELECT * FROM area WHERE MushroomLocationId = '$id';";
                $query = mysqli_query($conn,$sql);
                $result = mysqli_fetch_array($query,MYSQLI_ASSOC);
            ?>
            <div class="row">
                <div class="col-xl-3">
                    <label for="mushroom_id">รหัสเห็ด :</label>
                    <input name="mushroom_id" type="text" value="<?php echo $result['Mushroom_Id']?>" readonly>
                    <label for="mushroom_location">รหัสบริเวณ :</label>
                    <input name="mushroom_location" type="text" value="<?php echo $id?>" readonly>
                    <label for="txtlat">ละติจูด :</label>
                    <input name="txtlat" type="text" value="<?php echo $result['LatitudeX']?>" required>
                    <label for="txtlong">ลองจิจูด :</label>
                    <input name="txtlong" type="text" value="<?php echo $result['LongitudeY']?>" required>
                    <label for="txtzoneid">โซน :</label><br>
                    <select name="txtzoneid" class="mb-2">
                        <option value="<?php echo $result['Zone_Id']?>" hidden> Selected : <?php echo $result['Zone_Id']?></option>
                        <?php
                            include 'connect.php';
                            $sql1 = "SELECT * FROM zone";
                            $query1 = mysqli_query($conn,$sql1);
                            while ($result1 = mysqli_fetch_array($query1,MYSQLI_ASSOC)) {
                        ?>
                        <option value="<?php echo $result1['Zone_Id'] ?>"><?php echo $result1['Zone_Id'] ?>:<?php echo $result1['Zone_name'] ?>&nbsp<?php echo $result1['Zone_description'] ?>
                        <?php
                            }
                            mysqli_close($conn);
                        ?>
                    </select>
                    <label for="txtstatus">สถานะเห็ด :</label><br>
                    <select name="txtstatus" class="mb-2">
                        <option value="<?php echo $result['Status']?>" hidden> Selected : <?php echo $result['Status']?></option>
                        <option value="กินได้">กินได้</option>
                        <option value="กินไม่ได้">กินไม่ได้</option>
                        <option value="มีพิษ">มีพิษ</option>
                        <option value="ไม่ทราบชนิด">ไม่ทราบชนิด</option>
                    </select>
                </div>
                <div class="col-xl-8">
                    
                </div>
            </div>
            <div class="col mt-5">
                <div align="center">
                    <button type="submit">บันทึก</button>
                </div>
            </div>
        </form>
    </div>
    <?php
        } else {
            echo "<h1>กรุณาเข้าสู่ระบบ</h1>";
            echo "<a href='signin.php'>เข้าสู่ระบบ</a>";
        }
    ?>
</body>
</html>