<?php
	header("Content-Type: text/html; charset=utf-8");
	$dbc = mysqli_connect('localhost','root','12341234','blog')
		or die('Error connecting to MySQL serves');
	mysql_query("SET NAMES 'utf8'");
        mysql_query("set character set 'utf8'");
        mysql_set_charset('utf8');
?>
