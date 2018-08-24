<?php 
	require_once("connect_database.php");
    $pcode = $_GET["pcode"];
	$scode = $_GET["scode"];
    $sql_shop = "SELECT * FROM `shop` WHERE pcode = '$pcode'";
    $result_shop = mysqli_query($conn,$sql_shop);
    $row_shop = mysqli_fetch_assoc($result_shop);
	$sql = "SELECT * FROM `drink_menu` WHERE pcode = '$pcode'";
	$result = mysqli_query($conn,$sql);
    $sql_goods = "SELECT * FROM `goods` WHERE pcode = '$pcode'";
    $result_goods = mysqli_query($conn,$sql_goods);
    $count = "SELECT COUNT(*) FROM `drink_menu`";
    // $sql_size = "SELECT * FROM `drink_menu` WHERE menu='$menu'";
 ?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta name="viewport" content="width=device-width">
    <meta charset="UTF-8">
    <title>請選擇要喝什麼_飲料訂購系統_STEP3</title>
    <link rel="icon" type="image/svg" href="images/logo.svg">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/menu_table_button.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script>
        $(function(){
            var h = $("body").height();
            $(".section").css("height",1.25*h);
            var qsRegex;
            var buttonFilter;
            $(".buttons a").click(function(){
                var filterValue = $(this).attr("data-filter");
                    $("#grid").isotope({
                    itemSelector: '.box',
                    layoutMode: 'fitRows',
                    filter:filterValue,
                });                
            });
            var tea = $(".tea").length;
            var milkTea = $(".milkTea").length;
            var fruit = $(".fruit").length;
            var fruitTea = $(".fruitTea").length;
            var bubble = $(".bubble").length;
            var melon = $(".melon").length;
            var other = $(".other").length;
            if(tea == 0){
                $(".button_tea").hide();
            };
            if(milkTea == 0){
                $(".button_milkTea").hide();
            };
            if(fruit == 0){
                $(".button_fruit").hide();
            };
            if(fruitTea == 0){
                $(".button_fruitTea").hide();
            };
            if(bubble == 0){
                $(".button_bubble").hide();
            };
            if(melon == 0){
                $(".button_melon").hide();
            };
            if(other == 0){
                $(".button_other").hide();
            };
            $(".size1_radi,.size2_radi,.size3_radi").hide();
            $(".box").click(function(){
                $(".size1_radi,.size2_radi,.size3_radi").hide();
                $(".size1,.size2,.size3").html("");
                var menuname = $(this).attr("data-mmm");
                var size1 = $(this).attr("data-size1");
                var size2 = $(this).attr("data-size2");
                var size3 = $(this).attr("data-size3");
                var price1 = $(this).attr("data-price1");
                var price2 = $(this).attr("data-price2");
                var price3 = $(this).attr("data-price3");
                $(".size1").html(size1+"&nbsp;"+price1);
                $(".size1_radi").attr("value",size1);
                $(".size1_radi").fadeIn();
                if(size2!=""){
                    $(".size1_radi,.size2_radi").fadeIn();
                    $(".size2").html(size2+"&nbsp;"+price2);
                    $(".size2_radi").attr("value",size2);
                }
                if(size3!=""){
                    $(".size3_radi").fadeIn();
                    $(".size3").html(size3+"&nbsp;"+price3);
                    $(".size3_radi").attr("value",size3)
                }
                $("#menuuu").html(menuname);
                $("#drinkk input[type='hidden']").attr("value",menuname);
            });
            
        });
    </script>
</head>
<body>
    <div class="section">
        <h1>飲料訂購系統_STEP3</h1>
        <p>請選擇要喝什麼??</p>
        <div class="error_message">
            <?php if(isset($_GET["error"]) && $_GET["error"]==1){
                echo "請輸入姓名";
                header("Refresh:1;url='menu_table.php?pcode=$pcode&scode=$scode'");
            } ?>
            <?php if(isset($_GET["error"]) && $_GET["error"]==4){
                echo "請選擇甜度";
                header("Refresh:1;url='menu_table.php?pcode=$pcode&scode=$scode'");
            } ?>
            <?php if(isset($_GET["error"]) && $_GET["error"]==5){
                echo "請選擇冰塊量";
                header("Refresh:1;url='menu_table.php?pcode=$pcode&scode=$scode'");
            } ?>
        </div>
        <form action="check_table.php" method="post" id="myForm">
            <!-- <div class="memenu"><a href="images/<?php echo $row_shop["menu1"] ?>" class="fancy" rel="aaa">飲料店推薦</a><a href="images/<?php echo $row_shop["menu2"] ?>" class="fancy" rel="aaa">價目表</a></div>     -->
            <div class="buttons clearfix">
                <div class="left" id="filters">
                    <a href="javascript:;" data-filter="*">ALL</a>
                    <a href="javascript:;" data-filter=".tea" class="button_tea">茶</a>
                    <a href="javascript:;" data-filter=".milkTea" class="button_milkTea">奶茶</a>
                    <a href="javascript:;" data-filter=".fruit" class="button_fruit">水果</a>
                    <a href="javascript:;" data-filter=".fruitTea" class="button_fruitTea">水果茶</a>
                    <a href="javascript:;" data-filter=".bubble" class="button_bubble">有料</a>
                    <a href="javascript:;" data-filter=".melon" class="button_meon">冬瓜</a>
                    <a href="javascript:;" data-filter=".other" class="button_other">其他</a>
                </div>
                <div class="right">
                    <input type="text" id="quicksearch" placeholder="也可以在這搜尋">
                </div>
            </div>
            <div id="grid">
                <?php while($row = mysqli_fetch_assoc($result)){ ?>
                    <div class="box <?php echo $row["tag"]; ?>" data-mmm="<?php echo $row["menu"]; ?>" data-size1="<?php echo $row["size1"]; ?>" data-size2="<?php echo $row["size2"]; ?>" data-size3="<?php echo $row["size3"]; ?>" data-price1="<?php echo $row["price1"]; ?>" data-price2="<?php echo $row["price2"]; ?>" data-price3="<?php echo $row["price3"]; ?>">
                       <?php echo $row["menu"]; ?>
                    </div>
                <?php } ?>
            </div>
            <div id="drinkk">
                您選擇的是：<span id="menuuu"></span>
                <span class="size1"></span><input type="radio" name="size" value="" class="size1_radi" checked>
                <span class="size2"></span><input type="radio" name="size" value="" class="size2_radi">
                <span class="size3"></span><input type="radio" name="size" value="" class="size3_radi">
                <input type="hidden" name="menu" value="">
            </div>
            <div><input type="text" placeholder="請輸入姓名" name="name" id="name"></div>
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
                        <?php while($row = mysqli_fetch_assoc($result_goods)) { ?>
                            <option value="<?php echo $row["goods"]; ?>" checked><?php echo $row["goods"]; ?>&nbsp;<?php echo $row["price"]; ?></option>
                         <?php } ?> 
                    </select>
                </div>
                <input type="hidden" name="pcode" value="<?php echo $pcode ?>">
                <input type="hidden" name="scode" value="<?php echo $scode ?>">
            <div><input type="submit" value="送出" id="submit"></div>
        </form>
    </div>
</body>
</html>