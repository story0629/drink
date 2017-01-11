<?php 
	require_once("connect_database.php");
	$sql = "SELECT * FROM `scholl`";
	$result = mysql_query($sql);
 ?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>上課就是要訂飲料啊!!!</title>
    <link rel="icon" type="image/svg" href="images/logo.svg">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="section">
        <h1>上課就是要訂飲料啊!!!</h1>
        <p>請先選擇分校</p>
        <div class="button">
        	<?php while ($row = mysql_fetch_assoc($result)) { ?>
        		<a href="store.php?scode=<?php echo $row["scode"]; ?>"><?php echo $row["sname"]; ?></a>
        	<?php } ?>
        </div>
    </div>
</body>
</html>