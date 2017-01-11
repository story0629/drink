<?php 
	require_once("connect_database.php");
	$user = $_POST["user"];
	$password = $_POST["password"];
	$name = $_POST["name"];
	$sql = "INSERT INTO `member`(user,password,name)VALUES('$user','$password','$name')";
	mysql_query($sql);
	header("Location:member.php");
 ?>