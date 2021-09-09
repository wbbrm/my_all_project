<?php
    session_start();
    include 'connect.php';
    $sql = "SELECT * FROM employee WHERE ID_emp = '".mysqli_real_escape_string($conn,$_POST['txtusername'])."' and ID_dep = '".mysqli_real_escape_string($conn,$_POST['txtpassword'])."'";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_array($query,MYSQLI_ASSOC);
    $_SESSION["user"] = $result["Firstname_emp"]." ".$result["Lastname_emp"];
    $name = $_SESSION["user"];
    if(!$result) {
    	echo ("<script LANGUAGE='JavaScript'>
        window.alert('username หรือ password ไม่ถูกต้อง');
        window.location.href='home.php';
        </script>");
    }
    else {
    	echo ("<script LANGUAGE='JavaScript'>
        window.alert('ยินดีต้อนรับ $name');
        window.location.href='admin.php';
        </script>");
    }
    mysqli_close($conn);
 ?>