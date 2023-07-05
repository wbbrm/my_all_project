<?php
    include 'connect.php';
    $locationid = $_POST['mushroom_location'];
    $zoneid = $_POST['txtzoneid'];
    $id = $_POST['mushroom_id'];
    $longitude = $_POST['txtlong'];
    $latitude = $_POST['txtlat'];
    $status = $_POST['txtstatus'];

    $sql = "INSERT INTO area (MushroomLocationId, Zone_Id, Mushroom_Id, LongitudeY, LatitudeX, Status, Status_date) VALUES ('$locationid', '$zoneid', '$id', '$longitude', '$latitude', '$status', NOW())";
    if (mysqli_query($conn, $sql)) {
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('บันทึกข้อมูลสำเร็จ');
            window.location.href='dashboard.php';
            </script>");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>