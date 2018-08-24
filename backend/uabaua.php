<?php 
	require_once("connect_database.php");
	$sql = "SELECT * FROM `drink_menu` ORDER BY mid DESC LIMIT 5";
	$result = mysql_query($sql);
	$total = mysql_num_rows($result);
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<link href="../css/bootstrap.min.css" rel="stylesheet">
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
 </head>
 <body>
 	<div class="container">
	 	<table class="table table table-striped">
	 		<tr>
	 			<td>id</td>
	 			<td>飲料名稱</td>
	 			<td>尺寸1</td>
	 			<td>價格1</td>
	 			<td>尺寸2</td>
	 			<td>價格2</td>
	 			<td>尺寸3</td>
	 			<td>價格3</td>
	 			<td>飲料店</td>
	 		</tr>
	 		<?php if($total>0){ ?>
		 		<?php while($row = mysql_fetch_assoc($result)){ ?>
					<tr>
						<td><?php echo $row["mid"]; ?></td>
						<td><?php echo $row["menu"]; ?></td>
						<td><?php echo $row["size1"]; ?></td>
						<td><?php echo $row["price1"]; ?></td>
						<td><?php echo $row["size2"]; ?></td>
						<td><?php echo $row["price2"]; ?></td>
						<td><?php echo $row["size3"]; ?></td>
						<td><?php echo $row["price3"]; ?></td>
						<td><?php echo $row["pcode"]; ?></td>
						<?php $total_id = $row["mid"]; ?>
					</tr>
		 		<?php } ?>
		 	<?php } ?>
	 	</table>
	 	<a href="javascript:;" id="<?php echo $total_id; ?>" class="more">更多</a>
 	</div>
<script type="text/javascript">
	$(function(){
		$("body").on("click",".more",function(){
			var id = $(this).attr("id");
			$.ajax({
				url: "more.php",
				type: "post",
				data: "id="+id,
				success: function(e){
					$("table").append(e);
					console.log(e);
				},
				error: function(){
					consolo.log("error")
				},
			})
		})
	})
</script>
 </body>
 </html>