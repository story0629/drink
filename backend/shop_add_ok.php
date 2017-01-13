<?php 
	require_once("connect_database.php");
	$shop = $_POST["shop"];
	$tel = $_POST["tel"];
	$address = $_POST["address"];
	$scode = $_POST["scode"];
	$pcode = $_POST["pcode"];
	$images = $_FILES["images"]["name"];
	$tmp_name = $_FILES["images"]["tmp_name"];
	$error = $_FILES["images"]["error"];
	$target = "../images/".$images;
	$target_final = iconv("utf-8","big5",$target);
	if($error==0){
		move_uploaded_file($tmp_name,$target_final);
	};
	$sql = "INSERT INTO `shop`(shop,tel,address,image,scode,pcode)VALUES('$shop','$tel','$address','$images','$scode','$pcode')";
	mysql_query($sql);
	header("Location:shop.php");
 ?>