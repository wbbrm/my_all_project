<?php
	$id = $_GET['id'] ;
	include("connect.php");
	$sql1 = "SELECT * FROM mushroom WHERE Mushroom_Id = '$id'";
	$query1 = mysqli_query($conn, $sql1);
	$result1 = mysqli_fetch_array($query1,MYSQLI_ASSOC);
	$name = $result1['Mushroom_icon'];
    $path_link = "img/mushroom/" . $name;
    $sql = "DELETE FROM mushroom WHERE Mushroom_Id = '$id'";
    @unlink($path_link);
	if (mysqli_query($conn, $sql)) {
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('ลบข้อมูลสำเร็จ');
            window.location.href='dashboard.php';
            </script>");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>