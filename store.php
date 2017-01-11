<?php 
	require_once("connect_database.php");
	$scode = $_GET["scode"];
	$sql = "SELECT * FROM `shop` WHERE scode = '$scode'";
	$result = mysql_query($sql);
 ?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>請選擇飲料店_飲料訂購系統_STEP2</title>
    <link rel="icon" type="image/svg" href="images/logo.svg">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="section">
        <h1>飲料訂購系統_STEP2</h1>
        <p>請選擇飲料店</p>
        <div class="button">
            <?php while ($row = mysql_fetch_assoc($result)) { ?>
            	<a href="menu.php?pcode=<?php echo $row["pcode"]; ?>&scode=<?php echo $row["scode"] ?>"><?php echo $row["shop"]; ?></a>
            <?php } ?>
        </div>
    </div>
</body>
</html>