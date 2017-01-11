<?php 
	require_once("connect_database.php");
	$pid = $_POST["pid"];
	$shop = $_POST["shop"];
	$tel = $_POST["tel"];
	$address = $_POST["address"];
	$scode = $_POST["scode"];
	$pcode = $_POST["pcode"];
	$sql = "UPDATE `shop` SET shop='$shop',tel='$tel',address='$address',scode='$scode',pcode='$pcode' WHERE pid=$pid";
	mysql_query($sql);
	header("Location:shop.php");
 ?>