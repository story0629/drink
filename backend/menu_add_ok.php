<?php 
	require_once("connect_database.php");
	$menu = $_POST["menu"];
	$size1 = $_POST["size1"];
	$price1 = $_POST["price1"];
	$size2 = $_POST["size2"];
	$price2 = $_POST["price2"];
	$size3 = $_POST["size3"];
	$price3 = $_POST["price3"];
	$pcode = $_POST["pcode"];
	$sql = "INSERT INTO `drink_menu`(menu,size1,price1,size2,price2,size3,price3,pcode)VALUES('$menu','$size1','$price1','$size2','$price2','$size3','$price3','$pcode')";
	mysql_query($sql);
	// header("Location:menu.php");
 ?>