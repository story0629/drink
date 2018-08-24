<?php 
	require_once("connect_database.php");
	$sql = "DELETE FROM `order`";
	mysql_query($sql);
	header("Location:index.php");
 ?>