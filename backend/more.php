<?php 
	require_once("connect_database.php");
	if(isset($_POST["id"])){
		$id = $_POST["id"];
		echo $id;
		// $id = 258;
		$sql_all = "SELECT COUNT(*) as countcc FROM `drink_menu` WHERE mid<$id ORDER BY mid DESC";
		$result_all = mysql_query($sql_all);
		$row_all = mysql_fetch_assoc($result_all);
		$count_all = $row_all["countcc"];
		// echo $count_all;
		// echo "<h1>".$count_all."</h1>";
		// echo "<br>";
		$show_limit = 5;
		$sql = "SELECT * FROM `drink_menu` WHERE mid<$id ORDER BY mid DESC LIMIT $show_limit";
		$result = mysql_query($sql);
		$total = mysql_num_rows($result);
		
		if($total >0){
			while($row = mysql_fetch_assoc($result)) {
				$total_id = $row["mid"];
?>
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
				</tr>
<?php } ?>
		<?php if($count_all > $show_limit){ ?>
			<a href="javascript:;" id="<?php echo $total_id; ?>" class="more">更多</a>
		<?php } ?>
<?php } ?>
<?php } ?>