<?php 
	require_once("connect_database.php");
	$scode = $_GET["scode"];
	$sql = "SELECT * FROM `shop` WHERE scode = '$scode'";
	$result = mysqli_query($conn,$sql);
 ?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta name="viewport" content="width=device-width">
    <meta charset="UTF-8">
    <title>請選擇飲料店_飲料訂購系統_STEP2</title>
    <link rel="icon" type="image/svg" href="images/logo.svg">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
        .section {
            /*height: 120vh;*/
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</head>
<body>
    <div class="section">
        <h1>飲料訂購系統_STEP2</h1>
        <p>請選擇飲料店</p>
        <div class="button">
            <?php while($row = mysqli_fetch_assoc($result)){ ?>
            	<a href="menu_table.php?pcode=<?php echo $row["pcode"]; ?>&scode=<?php echo $row["scode"]; ?>" data-scode="<?php echo $row["scode"]; ?>" data-pcode="<?php echo $row["pcode"]; ?>">
                    <img src="images/<?php echo $row["image"]; ?>">
                </a>
            <?php } ?>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".button a").click(function(){
                var scode = $(this).attr("data-scode");
                var pcode = $(this).attr("data-pcode");
                console.log(scode);
                var data = {
                    pcode = pcode,
                    scode = scode,
                };
                var aaa = "pcode="+pcode+"&scode="+scode;
                $.ajax({
                    url: "menu_table.php",
                    type: "get",
                    data: data,
                    success: function(){
                        // location.href="menu_table.php";
                        location.href="menu_table.php?"+aaa;
                    },
                    error: function(){
                        console.log("error");
                    },
                })
            });
        });
    </script>
</body>
</html>