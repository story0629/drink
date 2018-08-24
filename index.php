<?php 
	require_once("connect_database.php");
	$sql = "SELECT * FROM `scholl`";
	$result = mysqli_query($conn,$sql);
 ?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta name="viewport" content="width=device-width">
    <meta charset="UTF-8">
    <title>上課就是要訂飲料啊!!!</title>
    <link rel="icon" type="image/svg" href="images/logo.svg" sizes="16x16">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
    <div class="section">
        <h1>上課就是要訂飲料啊!!!</h1>
        <p>請先選擇地區</p>
        <div class="button">
        	<?php while($row = mysqli_fetch_assoc($result)){ ?>
        		<a href="javascript:;" data-scode="<?php echo $row["scode"]; ?>"><?php echo $row["sname"]; ?></a>
        	<?php } ?>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".button a").click(function(){
                var scode = $(this).attr("data-scode");
                var data = "scode="+scode;
                $.ajax({
                    url:"store.php",
                    type: "get",
                    data: data,
                    success:function(){
                        location.href="store.php?"+data;
                    },
                    error:function(){
                        console.log("error");
                    },
                });
            });
        })
    </script>
</body>
</html>