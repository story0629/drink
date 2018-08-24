<?php 
	require_once("connect_database.php");
	$mid = $_GET["mid"];
	$sql = "DELETE FROM `drink_menu` WHERE mid=".$mid;
	mysql_query($sql);
	// echo $id;
	// header("Location: menu.php");
 ?>