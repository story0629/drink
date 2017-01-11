<?php 
	require_once("connect_database.php");
	$sname = $_POST["sname"];
	$saddress = $_POST["saddress"];
	$scode = $_POST["scode"];
	$sql = "INSERT INTO `scholl`(sname,saddress,scode)VALUES('$sname','$saddress','$scode')";
	mysql_query($sql);
	header("Location:scholl.php");
 ?>