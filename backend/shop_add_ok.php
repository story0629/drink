<?php 
	require_once("connect_database.php");
	$shop = $_POST["shop"];
	$tel = $_POST["tel"];
	$address = $_POST["address"];
	$scode = $_POST["scode"];
	$pcode = $_POST["pcode"];
	$sql = "INSERT INTO `shop`(shop,tel,address,scode,pcode)VALUES('$shop','$tel','$address','$scode','$pcode')";
	mysql_query($sql);
	header("Location:shop.php");
 ?>