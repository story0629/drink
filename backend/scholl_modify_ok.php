<?php 
	require_once("connect_database.php");
	$sid = $_POST["sid"];
	$sname = $_POST["sname"];
	$saddress = $_POST["saddress"];
	$scode = $_POST["scode"];
	$sql = "UPDATE `scholl` SET sname='$sname',saddress='$saddress',scode='$scode' WHERE sid=$sid";
	mysql_query($sql);
	header("Location:scholl.php");
 ?>