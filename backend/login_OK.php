<?php 
	require_once("connect_database.php");
	//如果user值或password值找不到值，直接回到index.php
	if(($_POST["user"]=="")||($_POST["password"]=="")){
		header("Location:login.php?error=2");
	}else{
		//如果有找到值，先判段這兩個存不存在,如果存在，選擇資料表，當欄位的帳號和登入的帳號一樣時
		if(isset($_POST["user"])&&isset($_POST["password"])){
			$user = $_POST["user"];
			$password = $_POST["password"];
			$sql = "SELECT * FROM `member` WHERE user='$user'";
			$result = mysql_query($sql);
			$row = mysql_fetch_assoc($result);
		//到第二部已證實帳號ok
		//第三部，如果key的密碼=資料庫內的密碼-->成功連結
			if ($password==$row["password"]) {
				$_SESSION["USER"] = $row["user"];
				$_SESSION["PASSWORD"] = $row["password"];
				$_SESSION["LEVEL"] = $row["level"];
				header("Location:index.php");
			}else{
				header("Location:login.php?error=3");
			}
		}
	}
?>