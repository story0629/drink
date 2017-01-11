<?php 
	require_once("connect_database.php");
	if (isset($_GET["logout"]) && $_GET["logout"]==true) {
		session_destroy();
		header("Location:../index.php");
	}
?>