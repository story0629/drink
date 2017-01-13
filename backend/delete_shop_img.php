<?php 
	require_once("connect_database.php");
	$sql = "UPDATE `shop` SET image='GG' WHERE pid=".$_GET["pid"];
	mysql_query($sql);
	unlink("../images/".$_GET["image"]);
	header("Location:shop_modify.php?pid=".$_GET["pid"]);
 ?>