<?php 
	require_once("connect_database.php");
	$menu = $_POST["menu"];
	$price = $_POST["price"];
	$pcode = $_POST["pcode"];
	$sql = "INSERT INTO `drink_menu`(menu,price,pcode)VALUES('$menu','$price','$pcode')";
	mysql_query($sql);
	header("Location:menu.php");
 ?>