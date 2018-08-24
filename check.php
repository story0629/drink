<?php 
	require_once("connect_database.php");
	$name = $_POST["name"];
	$scode = $_POST["scode"];
	$pcode = $_POST["pcode"];
	$menu = $_POST["menu"];
	$surger = $_POST["surger"];
	$ice = $_POST["ice"];
	$goods = $_POST["goods"];
	if ($name=="") {
		header("Location:menu.php?pcode=$pcode&scode=$scode&error=1");
	}
	if($pcode == "50arasi_Zongxiao" || $pcode == "50arasi_Gongguan"){
		$big_menu = strpos($menu,"大杯");
		$big_goods = strpos($goods,"大杯");
		$small_menu = strpos($menu,"中杯");
		$small_goods = strpos($goods,"中杯");
		if($small_menu>0 && $big_goods>0){
			header("Location:menu.php?pcode=$pcode&scode=$scode&error=2");
			// echo "飲料選擇中杯加料選擇大杯";
		}
		if($big_menu>0 && $small_goods>0){
			header("Location:menu.php?pcode=$pcode&scode=$scode&error=3");
			// echo "飲料選擇大杯加料選擇中杯";
		}
	}
	$sql_menu = "SELECT * FROM `drink_menu` WHERE menu='$menu'";
	$result_menu = mysql_query($sql_menu);
	$row_menu = mysql_fetch_assoc($result_menu);
	$price_menu = $row_menu["price"];
	$sql_goods = "SELECT * FROM `goods` WHERE goods='$goods'";
	$result_goods = mysql_query($sql_goods);
	$row_goods = mysql_fetch_assoc($result_goods);
	$price_goods = $row_goods["price"];
 ?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta name="viewport" content="width=device-width">
	<meta charset="UTF-8">
	<title>請確認是否正確_飲料訂購系統_STEP4</title>
    <link rel="icon" type="image/svg" href="images/logo.svg">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="section">
        <h1>飲料訂購系統_STEP4</h1>
        <p>請確認是否正確</p>
		<form action="insert.php" method="post" class="check">
			<div>
				姓名：<?php echo $name ?>
				<input type="hidden" name="name" value="<?php echo $name ?>">
			</div>
			<div>
				飲料：<?php echo $menu ?>
				<input type="hidden" name="menu" value="<?php echo $menu ?>">
			</div>
			<div>
				甜度：<?php echo $surger ?>
				<input type="hidden" name="surger" value="<?php echo $surger ?>">
			</div>
			<div>
				冰塊：<?php echo $ice ?>
				<input type="hidden" name="ice" value="<?php echo $ice ?>">
			</div>
			<div>
				加料：<?php echo $goods ?>
				<input type="hidden" name="goods" value="<?php echo $goods ?>">
			</div>
			<div>
				飲料金額：<?php echo $price_menu ?>
				<input type="hidden" name="price_menu" value="<?php echo $price_menu ?>">
			</div>
			<div>
				加料金額：<?php echo $price_goods ?>
				<input type="hidden" name="price_goods" value="<?php echo $price_goods ?>">
			</div>
			<div>
				總金額：<?php echo $price_menu+$price_goods ?>
				<input type="hidden" name="total" value="<?php echo $price_menu+$price_goods ?>">
				<input type="hidden" name="pcode" value="<?php echo $pcode ?>">
				<input type="hidden" name="scode" value="<?php echo $scode ?>">
			</div>
			<div>
				<input type="submit" value="確定">
				<input type="button" value="回上頁" onclick="history.back()">
			</div>
		</form>
	</div>
</body>
</html>