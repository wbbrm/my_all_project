<?php
    session_start();
    include 'connect.php';
    $id = $_GET['id'];
    $sql1 = "SELECT * FROM mushroom WHERE Mushroom_Id = '$id';";
    $query1 = mysqli_query($conn,$sql1);
    $result1 = mysqli_fetch_array($query1,MYSQLI_ASSOC);
    $sql = "SELECT * FROM admin WHERE Username = '".mysqli_real_escape_string($conn,$_POST['txtusername'])."' and Password = '".mysqli_real_escape_string($conn,$_POST['txtpassword'])."'";
    $query = mysqli_query($conn,$sql);
    if (mysqli_num_rows($query)==1) {
        $result = mysqli_fetch_array($query,MYSQLI_ASSOC);
        $_SESSION["userid"] = $result["Admin_Id"];
        $_SESSION["user"] = $result["Username"];
        $_SESSION["usertype"] = $result["Status"];
        $mushid = $result1['Mushroom_Id'];
        $name = $_SESSION["user"];
        if ($_SESSION["usertype"]=="1") {
            echo ("<script LANGUAGE='JavaScript'>
                window.location.href='location.php';
                </script>");
        }
        if ($_SESSION["usertype"]=="2") {
            echo ("<script LANGUAGE='JavaScript'>
                </script>");
            header("Location:location.php?id=$mushid");
                
        }
    } else {
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('username หรือ password ไม่ถูกต้อง');
            window.history.back()
            </script>");
    }
    mysqli_close($conn);
 ?>