<?php
    include 'connect.php';
    if($_GET["Action"] == "Save")
    {
        $date = date("Ymd_His");
        $img = (isset($_POST['file']) ? $_POST['file'] : '');
        $upload=$_FILES['file'];
        if($upload <> '') {
            $path="img/";
            $type = strrchr($_FILES['file']['name'],".");
            $newname = $date.$type;
            $path_copy=$path.$newname;
            $path_link="img/".$newname;
            move_uploaded_file($_FILES['file']['tmp_name'],$path_copy);  	
        }
        $sql = "INSERT INTO car (Bodynumber, Brand, Generation, License_plate, Price, Geartype, Color, Passenger, Detail, Picture) VALUES ('".$_POST["txtbodynumber"]."','".$_POST["txtbrand"]."','".$_POST["txtgeneration"]."','".$_POST["txtlicense_plate"]."','".$_POST["txtprice"]."','".$_POST["txtgeartype"]."','".$_POST["txtcolor"]."','".$_POST["txtpassenger"]."','".$_POST["txtdetail"]."','$newname')";
    $query = mysqli_query($conn,$sql);
    echo ("<script LANGUAGE='JavaScript'>
        window.alert('เพิ่มข่าวสารสำเร็จ');
        window.location.href='add_car.php';
        </script>");
    }
?>