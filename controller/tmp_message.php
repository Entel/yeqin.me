<?php
	include '../model/database_connect.php';
	date_default_timezone_set('Asia/Shanghai');
	
	$username = $_POST['username'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	echo $username.$email.$message;
	
	mysqli_query($dbc, "INSERT INTO message
				( username, email, message, date, ip)
				VALUES 
				('".$username."', '".$email."', '".$message."', '".date('Y-m-d H:i:s')."','".$_SERVER['REMOTE_ADDR']."')");
	
	header("location:../view/message.php");
	
?>