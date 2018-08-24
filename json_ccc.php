<?php 
	require_once("connect_database.php");
	$sql = "SELECT * FROM `school`";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_assoc($result)) {
		$b[]=$row;
	}
	echo json_encode($b,JSON_UNESCAPED_UNICODE);
?>