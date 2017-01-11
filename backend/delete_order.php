<?php 
	require_once("connect_database.php");
	$id = $_GET["id"];
	$sql = "DELETE FROM `order` WHERE id=$id";
	mysql_query($sql);
	header("Location:index.php");
 ?>