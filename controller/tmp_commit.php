<?php
	include '../model/database_connect.php';
	date_default_timezone_set('Asia/Shanghai');
	
	$username = $_POST['username'];
	$email = $_POST['email'];
	$commit = $_POST['commit'];
	
	echo $_COOKIE['a_id'].$username.$email.$commit;
	
	mysqli_query($dbc, "INSERT INTO article_commit 
				( a_id, username, email, commit, date)
				VALUES 
				('".$_COOKIE['a_id']."', '".$username."', '".$email."', '".$commit."', '".date('Y-m-d H:i:s')."')");
	
	header("location:../view/article.php?a_id=".$_COOKIE['a_id']);
	
?>