<?php 
	require_once("connect_database.php");
	$mid = $_POST["mid"];
	$menu = $_POST["menu"];
	$price = $_POST["price"];
	$pcode = $_POST["pcode"];
	$sql = "UPDATE `drink_menu` SET menu='$menu',price='$price',pcode='$pcode' WHERE mid=$mid";
	mysql_query($sql);
	header("Location:menu.php");
 ?>