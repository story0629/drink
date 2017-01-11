<?php 
	require_once("connect_database.php");
	$gid = $_POST["gid"];
	$goods = $_POST["goods"];
	$price = $_POST["price"];
	$pcode = $_POST["pcode"];
	$sql = "UPDATE `goods` SET goods='$goods',price='$price',pcode='$pcode' WHERE gid=$gid";
	mysql_query($sql);
	header("Location:goods.php");
 ?>