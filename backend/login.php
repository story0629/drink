<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>飲料訂購系統_登入頁</title>
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

</head>
<body>
		<?php if(isset($_GET["error"]) && $_GET["error"] ==2) { ?>
		<h2 class="error">請輸入帳號密碼。</h2>
		<?php header("Refresh:1;url='login.php'"); ?>
		<?php } ?>
		<?php if(isset($_GET["error"]) && $_GET["error"] ==3) { ?>
		<h2 class="error">帳號或密碼有錯誤。</h2>
		<?php header("Refresh:1;url='login.php'"); ?>
		<?php } ?>
	<div class="container clearfix">
		<form action="login_OK.php" method="post" class="form-horizontal">
			<div class="form-group">
				<label class="col-md-5 col-md-offset-1 col-sm-12 col-xs-12">Account：</label>
				<input type="text" name="user" class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
			</div>
			<div class="form-group">
				<label class="col-md-5 col-md-offset-1 col-sm-12 col-xs-12">Password：</label>
				<input type="password" name="password" class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
			</div>
			<div class="clearfix">
				<input type="submit" value="送出" class="btn btn-default col-md-3 col-md-offset-3 col-sm-3 col-sm-offset-3 col-xs-3 col-xs-offset-3">
				<input type="button" value="返回" class="btn btn-danger col-md-3 col-sm-3 col-xs-3" onclick="history.back()">
			</div>
		</form>
	</div>
</body>
</html>