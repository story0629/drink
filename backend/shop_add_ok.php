<?php 
	require_once("connect_database.php");
	$shop = $_POST["shop"];
	$tel = $_POST["tel"];
	$address = $_POST["address"];
	$scode = $_POST["scode"];
	$pcode = $_POST["pcode"];

	$photo01 = $_FILES["photo"]["name"][0];
	$photo02 = $_FILES["photo"]["name"][1];
	$photo03 = $_FILES["photo"]["name"][2];
	$i = count($_FILES["photo"]["name"]);
	for ($j=0; $j <$i ; $j++) { 
		$images = $_FILES["images"]["name"][$j];
		$tmp_name = $_FILES["images"]["tmp_name"][$j];
		$error = $_FILES["images"]["error"][$j];
		$target = "../images/".$images;
		$target_final = iconv("utf-8","big5",$target);
		if($error==0){
			move_uploaded_file($tmp_name,$target_final);
		};
	};
	$sql = "INSERT INTO `shop`(shop,tel,address,image,menu1,menu2,scode,pcode)VALUES('$shop','$tel','$address','$photo01','$photo02','$photo03','$scode','$pcode')";
	mysql_query($sql);
	header("Location:shop.php");
 ?>