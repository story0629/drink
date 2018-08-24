<?php 
	require_once("connect_database.php");
	$mid = $_POST["mid"];
	$menu = $_POST["menu"];
	$size1 = $_POST["size1"];
	$price1 = $_POST["price1"];
	$size2 = $_POST["size2"];
	$price2 = $_POST["price2"];
	$size3 = $_POST["size3"];
	$price3 = $_POST["price3"];
	$sql = "UPDATE `drink_menu` SET menu='$menu',size1='$size1',price1='$price1',size2='$size2',price2='$price2',size3='$size3',price3='$price3',pcode='$pcode' WHERE mid=$mid";
	mysql_query($sql);
	// header("Location:menu.php");
 ?>