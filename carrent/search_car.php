<?php
	include 'connect.php';
	error_reporting(0);
	$cartype = $_POST['cartype'] ;
	$brand = $_POST['brand'] ;
	$geartype = $_POST['geartype'] ;  
	$sql = "SELECT * FROM car WHERE Car_type LIKE '%$cartype%' OR Brand  LIKE '%$brand%'  ";

	$query = mysqli_query($conn,$sql);
	 while($result = mysqli_fetch_array($query,MYSQLI_ASSOC)){
	 	echo $result['id']." ".$result['Car_type'];
	 }
?>