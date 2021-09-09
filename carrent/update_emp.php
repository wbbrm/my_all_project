<?php
    include 'connect.php';
    $sql = "UPDATE employee SET ID_emp='".$_POST['id_emp']."',Firstname_emp='".$_POST['txtfirstname']."',Lastname_emp='".$_POST['txtlastname']."',Phonenumber_emp='".$_POST['txtphonenumber']."',Address_emp='".$_POST['txtaddress']."',ID_dep='".$_POST['id_dep']."',Affiliation_date='".$_POST['date_in']."',Resignation_date='".$_POST['date_out']."' WHERE id='".$_POST['get_id']."'";
    $query = mysqli_query($conn,$sql);
    echo ("<script LANGUAGE='JavaScript'>
        window.alert('แก้ไขข้อมูลพนักงานเสร็จสิ้น');
        window.location.href='detail_emp.php';
        </script>");
?>