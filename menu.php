<?php 
	require_once("connect_database.php");
    $pcode = $_GET["pcode"];
	$scode = $_GET["scode"];
	$sql = "SELECT * FROM `drink_menu` WHERE pcode = '$pcode'";
	$result = mysql_query($sql);
    $sql_goods = "SELECT * FROM `goods` WHERE pcode = '$pcode'";
    $result_goods = mysql_query($sql_goods);
 ?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>請選擇要喝什麼_飲料訂購系統_STEP3</title>
    <link rel="icon" type="image/svg" href="images/logo.svg">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="section">
        <h1>飲料訂購系統_STEP3</h1>
        <p>請選擇要喝什麼??</p>
        <form action="check.php" method="post" id="myForm">
            <div><input type="text" placeholder="請輸入姓名" name="name"></div>
            <div>
                <select name="menu" id="menu" onchange="update()">
                        <option value="">請選擇要喝什麼</option>
                    <?php while ($row = mysql_fetch_assoc($result)) { ?>
                        <option value="<?php echo $row["menu"]; ?>"><?php echo $row["menu"]; ?>&nbsp;<?php echo $row["price"]; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div>
                <select name="surger" id="surger">
                    <option value="">請選擇甜度</option>
                    <option value="全糖">全糖</option>   
                    <option value="7分糖">7分糖</option>   
                    <option value="5分糖">5分糖</option>   
                    <option value="3分糖">3分糖</option>   
                    <option value="無糖">無糖</option>   
                </select>
            </div>
            <div>
                <select name="ice" id="ice">
                    <option value="">請選擇冰塊</option>
                    <option value="正常">正常</option>   
                    <option value="7分冰">7分冰</option>   
                    <option value="3分冰">3分冰</option>   
                    <option value="去冰">去冰</option>  
                    <option value="熱">熱</option>   
                </select>
            </div>
                <div>
                    <select name="goods" id="goods">
                        <?php while($row = mysql_fetch_assoc($result_goods)) { ?>
                            <option value="<?php echo $row["goods"]; ?>"><?php echo $row["goods"]; ?>&nbsp;<?php echo $row["price"]; ?></option>
                         <?php } ?> 
                    </select>
                </div>
                <input type="hidden" name="pcode" value="<?php echo $pcode ?>">
                <input type="hidden" name="scode" value="<?php echo $scode ?>">
            <div><input type="submit"value="送出"></div>
        </form>
    </div>
</body>
</html>