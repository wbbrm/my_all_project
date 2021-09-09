<?php
    include 'connect.php';
    if($_GET["Action"] == "Save")
    {
        $sql = "UPDATE car SET Bodynumber='".$_POST["txtbodynumber"]."', Brand='".$_POST["txtbrand"]."', Generation='".$_POST["txtgeneration"]."', License_plate='".$_POST["txtlicense_plate"]."', Price='".$_POST["txtprice"]."', Geartype='".$_POST["txtgeartype"]."', Color='".$_POST["txtcolor"]."', Passenger='".$_POST["txtpassenger"]."', Detail='".$_POST["txtdetail"]."' WHERE id='".$_POST['get_id']."'"; 
        $date = date("Ymd_His");
        $img = (isset($_POST['file']) ? $_POST['file'] : '');
        $upload=$_FILES['file'];
        if($upload != '')
        {
            $path="img/";
            $type = strrchr($_FILES['file']['name'],".");
            $newname = $date.$type;
            $path_copy=$path.$newname;
            $path_link="img/".$newname;
            if (move_uploaded_file($_FILES['file']['tmp_name'],$path_copy))
            {
                //***delete old file***//
                @unlink("img/".$_POST['img2']);
                //***upload new file**//
                $sql = "UPDATE car SET Picture='$newname' WHERE id='".$_POST['get_id']."'"; 
            }
        }
       
    $query = mysqli_query($conn,$sql);
    echo ("<script LANGUAGE='JavaScript'>
        window.alert('แก้ไขข้อมูลรถสำเร็จ');
        window.location.href='detail_car.php';
        </script>");
    }
?>