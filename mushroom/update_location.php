<?php
    include 'connect.php';
    $locationid = $_POST['mushroom_location'];
    $zoneid = $_POST['txtzoneid'];
    $mushroom_id = $_POST['mushroom_id'];
    $longitude = $_POST['txtlong'];
    $latitude = $_POST['txtlat'];
    $status = $_POST['txtstatus'];

    $sql = "UPDATE area SET Zone_Id = '$zoneid', LatitudeX = '$latitude', LongitudeY = '$longitude', Status = '$status', Status_date = NOW() WHERE MushroomLocationId = '$locationid'";
    if (mysqli_query($conn, $sql)) {
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('บันทึกข้อมูลสำเร็จ');
            window.location.href='dashboard.php';
            </script>");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>