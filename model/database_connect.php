<?php
	header("Content-Type: text/html; charset=utf-8");
	mysql_query("set names utf8");
	$dbc = mysqli_connect('localhost','root','12341234','blog')
		or die('Error connecting to MySQL serves');
	header("Content-Type: text/html; charset=utf-8");
	mysql_query("set names utf8");
?>