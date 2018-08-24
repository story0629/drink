<?php 
	require_once("connect_database.php");
	$photo = $_FILES["photo"]["name"];
	$tmp_name = $_FILES["photo"]["tmp_name"];
	$error = $_FILES["photo"]["error"];
	$target = "../images/product/".$photo;
	$target_final = iconv("utf-8","big5",$target);
	if($error==0){
		if(move_uploaded_file($tmp_name, $target_final)){
			switch($_POST["i"]){
				case "01":
				$sql = "UPDATE `product` SET img01='$photo' WHERE pid=".$_GET["pid"];
				mysql_query($sql);
				header("Location:shop_modify?pid=".$_GET["pid"]);
				break;
				case "02":
				$sql = "UPDATE `product` SET img02='$photo' WHERE pid=".$_GET["pid"];
				mysql_query($sql);
				header("Location:shop_modify?pid=".$_GET["pid"]);
				break;
				case "03":
				$sql = "UPDATE `product` SET img03='$photo' WHERE pid=".$_GET["pid"];
				mysql_query($sql);
				header("Location:shop_modify?pid=".$_GET["pid"]);
				break;
			}
		}
	}
 ?>