<?php 
	require_once("connect_database.php");
	$name = $_POST["name"];
	$menu = $_POST["menu"];
	$surger = $_POST["surger"];
	$ice = $_POST["ice"];
	$goods = $_POST["goods"];
	$price_menu = $_POST["price_menu"];
	$price_goods = $_POST["price_goods"];
	$total = $_POST["total"];
	$pcode = $_POST["pcode"];
	$scode = $_POST["scode"];
	$sql = "INSERT INTO `order`(name,menu,surger,ice,goods,price_menu,price_goods,total,time,pcode,scode)VALUES('$name','$menu','$surger','$ice','$goods','$price_menu','$price_goods','$total',NOW(),'$pcode','$scode')";
	mysql_query($sql);
	header("Location:index.php")
 ?>