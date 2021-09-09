<?php
    $id = $_GET['id'] ;
    include("connect.php");
    $sql = "DELETE FROM mushroomfamily WHERE MushroomFamily_Id = '$id'";
    if (mysqli_query($conn, $sql)) {
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('ลบข้อมูลสำเร็จ');
            window.location.href='dashboard.php';
            </script>");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>