<?php 
	require_once("connect_database.php");
	$id = $_POST["id"];
	$user = $_POST["user"];
	$password = $_POST["password"];
	$name = $_POST["name"];
	$sql = "UPDATE `member` SET user='$user',password='$password',name='$name' WHERE id=$id";
	mysql_query($sql);
	header("Location:member.php");
 ?>