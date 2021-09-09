<?php
	$severname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "rspgpnru_mushroom";

	//creat connection
	$conn = mysqli_connect($severname, $username, $password, $dbname);
	mysqli_set_charset($conn,"utf8");

	//check connection
	if (!$conn) {
		die("connection failed: " . mysqli_connect_error());
	} else {
		//echo "connection successful" . mysqli_error($conn);
	}
?>