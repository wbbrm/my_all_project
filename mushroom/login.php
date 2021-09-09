<?php
    session_start();
    include 'connect.php';
    $sql = "SELECT * FROM admin WHERE Username = '".mysqli_real_escape_string($conn,$_POST['txtusername'])."' and Password = '".mysqli_real_escape_string($conn,$_POST['txtpassword'])."'";
    $query = mysqli_query($conn,$sql);
    if (mysqli_num_rows($query)==1) {
        $result = mysqli_fetch_array($query,MYSQLI_ASSOC);
        $_SESSION["userid"] = $result["Admin_Id"];
        $_SESSION["user"] = $result["Username"];
        $_SESSION["usertype"] = $result["Status"];
        $name = $_SESSION["user"];
        if ($_SESSION["usertype"]=="1") {
            echo ("<script LANGUAGE='JavaScript'>
                window.alert('ยินดีต้อนรับ $name');
                window.location.href='dashboard.php';
                </script>");
        }
        if ($_SESSION["usertype"]=="2") {
            echo ("<script LANGUAGE='JavaScript'>
                window.alert('ยินดีต้อนรับ $name');
                window.location.href='location.php';
                </script>");
                
        }
    } else {
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('username หรือ password ไม่ถูกต้อง');
            window.history.back()
            </script>");

    }
    mysqli_close($conn);
 ?>