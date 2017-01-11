<?php
	header("Content-type:text/html;charset=utf-8");
	mysql_connect("localhost","kingarys_admin","Sewing_Thread00")or die("ERROR");
	// mysql_select_db("kingarys_drink") or die ("MYSQL資料庫選錯了");
	mysql_select_db("drink") or die ("MYSQL資料庫選錯了");
	mysql_query("SET NAMES utf8");
?>