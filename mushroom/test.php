<?php
include ('connect.php');
$answer = $_POST['ans'];
$d = $_POST['d'];
$c = $_POST['c'];
$a = $_POST['a'];
$b = $_POST['b'];
$ans1 = $_POST['ans1'];
$ans2 = $_POST['ans2'];

if ($answer == "an1") {          
    if ($ans1 == "มี") {
    	$sql = "INSERT INTO test (ans, d, a, b, ans1, ans2) VALUES ('$answer', '$d', '$a', '$b', '$ans1', '$ans2')";
    }
    else{
    	$sql = "INSERT INTO test (ans, d, a, b, ans1) VALUES ('$answer', '$d', '$a', '$b', '$ans1')";
    }
}
else {
   	$sql = "INSERT INTO test (ans, c, a, b) VALUES ('$answer', '$c', '$a', '$b')";  
}
if (mysqli_query($conn, $sql)) {
        echo ("บันทึกข้อมูลสำเร็จ");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}            
?>