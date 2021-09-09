<?php
    include 'connect.php';
    $name= $_POST['txtname'];
    $sql = "INSERT INTO mushroomfamily (MushroomFamily_name) VALUES ('$name')";
    if (mysqli_query($conn, $sql)) {
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('บันทึกข้อมูลสำเร็จ');
            window.location.href='add_family.php';
            </script>");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>