<?php
    include 'connect.php';
    $familyid = $_POST['mushroom_family'];
    $name = $_POST['txtname'];
    $sql = "INSERT INTO mushroomfamily (MushroomFamily_Id,MushroomFamily_name) VALUES ('$familyid','$name')";
    if (mysqli_query($conn, $sql)) {
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('บันทึกข้อมูลสำเร็จ');
            window.location.href='add_family.php';
            </script>");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>