<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="th-TH">
<head>
    <title>ระบบค้นหาข้อมูลเห็ด-ผลการค้นหา</title>
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
    <style>
        table {
            width: 100%;
            max-width: 100%;
        }

        th {
            background-color: #CEB888;
            color: #000000;
            text-align: inherit;
            text-align: -webkit-match-parent;
        }

        td {
            background-color: #F5E8DC;
            border-bottom: 1px solid #656565;
            color: #656565;
            text-align: inherit;
            text-align: -webkit-match-parent;
        }
    </style>
    <?php include 'navbar.php' ?>
    <div class="container-fluid py-5 my-5">
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th>ชื่อเห็ด</th>
                    <th>ชื่อท้องถิ่น</th>
                    <th>ชื่อสามัญ</th>
                    <th>ชื่อวิทยาศาสตร์</th>
                    <th>รูปตัวอย่าง</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include('connect.php');
                $mushroom = $_GET['searchname'];
                $sql = "SELECT * FROM mushroom WHERE Mushroom_name LIKE '%$mushroom%'" or die("Error:" . mysqli_error()); 
                $query = mysqli_query($conn, $sql);
                while ($result = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><a href="detail.php?id=<?=$result["Mushroom_Id"]?>"><?php echo $result["Mushroom_name"];?></a></td>
                    <td><?php echo $result["Mushroom_localname"];?></td>
                    <td><?php echo $result["Mushroom_commonname"];?></td>
                    <td><?php echo $result["Mushroom_science"];?></td>
                    <td><img src="img/mushroom/<?php echo $result["Mushroom_icon"];?>" width="100"></td>
            </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
        <?php
            mysqli_close($conn);
        ?>
    </div>
</body>
<footer>
    Copyright © 2020 Phranakhon Rajabhat University
</footer>
</html>