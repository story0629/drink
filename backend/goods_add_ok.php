<?php 
	require_once("connect_database.php");
	$goods = $_POST["goods"];
	$price = $_POST["price"];
	$pcode = $_POST["pcode"];
	$sql = "INSERT INTO `goods`(goods,price,pcode)VALUES('$goods','$price','$pcode')";
	mysql_query($sql);
	header("Location:goods.php");
 ?>