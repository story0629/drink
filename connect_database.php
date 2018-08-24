<?php
	//header("Content-type:text/html;charset=utf-8");
	$db_lost = "localhost";
	$db_user = "kingarys_admin";
	$db_pw = "Sewing_Thread00";
	$db_name = "drink";
	$conn = mysqli_connect($db_lost,$db_user,$db_pw);
	mysqli_select_db($conn,$db_name);
?>