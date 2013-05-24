<?php
	include '../model/database_connect.php';
	
	$title = $_POST['title'];
	$type = $_POST['type'];
	$date = $_POST['date'];
	$article = $_POST['article'];
	
	mysqli_query($dbc, "INSERT INTO article
					(title, type, date, article)
					VALUES
					('".$title."','".$type."','".$date."','".$article."')"
	);
	
	echo $title.'<br />'.
		$type.'<br />'.
		$date.'<br />'.
		$article;
?>