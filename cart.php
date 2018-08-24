<?php 
	require_once("connect_databse.php");
	session_start();
	$name = $_POST["name"];
	$scode = $_POST["scode"];
	$pcode = $_POST["pcode"];
	$menu = $_POST["menu"];
	$size = $_POST["size"];
	$surger = $_POST["surger"];
	$ice = $_POST["ice"];
	$goods = $_POST["goods"];
	if($name==""){
		header("Location:menu_table.php?pcode=$pcode&scode=$scode&error=1");
	};
	if($surger==""){
		header("Location:menu_table.php?pcode=$pcode&scode=$scode&error=4");
	};
	if($ice==""){
		header("Location:menu_table.php?pcode=$pcode&scode=$scode&error=5");
	};
	$sql_price = "SELECT * FROM `drink_menu` WHERE pcode='$pcode' AND menu='$menu'";
	$result_price = mysql_query($sql_price);
	$row_price = mysql_fetch_assoc($result_price);

	if($size == $row_price["size1"]){
		$price_menu = $row_price["price1"];
	}else if($size == $row_price["size2"]){
		$price_menu = $row_price["price2"];
	}else{
		$price_menu = $row_price["price3"];
	};
	$sql_goods = "SELECT * FROM `goods` WHERE pcode='$pcode' AND goods='$goods'";
	$result_goods = mysql_query($sql_goods);
	$row_goods = mysql_fetch_assoc($result_goods);
	$price_goods = $row_goods["price"];

	$Cart = new Cart();
	
 ?>