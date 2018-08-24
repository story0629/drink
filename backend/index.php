<?php 
    require_once("connect_database.php");
    $sql = "SELECT * FROM `order` ORDER BY time DESC";
    $result = mysql_query($sql);
    if(!isset($_SESSION["USER"])){ 
        header("Location:login.php");
    }
    $sql_sum = "SELECT SUM(total) FROM `order`";
    $result_sum = mysql_query($sql_sum);
    $row_sum = mysql_fetch_assoc($result_sum);
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>後台</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/sb-admin.css" rel="stylesheet">
    <link href="../css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="../css/plugins/morris.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/reset.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $("#myTable").DataTable();
        })
    </script>
</head>


    <div id="wrapper">

        <!-- Navigation -->
        <!-- nav -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">訂飲料系統後台</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp;<?php echo $_SESSION["USER"]; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="logout.php?logout=true"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- 側邊 -->
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i>查看訂單</a>
                    </li>
                    <li>
                        <a href="scholl.php"><i class="fa fa-fw fa-bar-chart-o"></i>查看分校選項</a>
                    </li>
                    <li>
                        <a href="shop.php"><i class="fa fa-fw fa-table"></i>查看飲料店選項</a>
                    </li>
                    <li>
                        <a href="menu.php"><i class="fa fa-fw fa-edit"></i>查看飲料店MENU</a>
                    </li>
                    <li>
                        <a href="goods.php"><i class="fa fa-fw fa-desktop"></i>查看飲料店加料</a>
                    </li>
                    <li>
                        <a href="member.php"><i class="fa fa-fw fa-wrench"></i>查看會員</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading --><!-- 標頭 -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            查看訂單 <small><!-- Statistics Overview --></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="container table" id="myTable">
                        <tr>
                            <td>id</td>
                            <td>姓名</td>
                            <td>飲料</td>
                            <td>尺寸</td>
                            <td>甜度</td>
                            <td>冰塊</td>
                            <td>加料</td>
                            <td>飲料金額</td>
                            <td>加料金額</td>
                            <td>總金額</td>
                            <td>訂購時間</td>
                            <td>分校</td>
                            <td>飲料店</td>
                            <td>電話</td>
                            <td><a href="delete_order_all.php" onclick="return confirm('是否刪除???')">全部刪除</td>
                        </tr>
                        <?php while($row = mysql_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["name"]; ?></td>
                            <td><?php echo $row["menu"]; ?></td>
                            <td><?php echo $row["size"]; ?></td>
                            <td><?php echo $row["surger"]; ?></td>
                            <td><?php echo $row["ice"]; ?></td>
                            <td><?php echo $row["goods"]; ?></td>
                            <td><?php echo $row["price_menu"]; ?></td>
                            <td><?php echo $row["price_goods"]; ?></td>
                            <td><?php echo $row["total"]; ?></td>
                            <td><?php echo $row["time"]; ?></td>
                            <td>
                                <?php
                                    $scode = $row["scode"];
                                    $sql_scode = "SELECT * FROM `scholl` WHERE scode='$scode'";
                                    $result_scode = mysql_query($sql_scode);
                                    $row_s = mysql_fetch_assoc($result_scode);
                                    echo $row_s["sname"];
                                ?>
                            </td>
                            <td>
                                <?php
                                    $pcode = $row["pcode"];
                                    $sql_pcode = "SELECT * FROM `shop` WHERE pcode='$pcode'";
                                    $result_pcode = mysql_query($sql_pcode);
                                    $row_p = mysql_fetch_assoc($result_pcode);
                                    echo $row_p["shop"];
                                ?>
                            </td>
                            <td>
                                <?php
                                    $pcode = $row["pcode"];
                                    $sql_pcode = "SELECT * FROM `shop` WHERE pcode='$pcode'";
                                    $result_pcode = mysql_query($sql_pcode);
                                    $row_p = mysql_fetch_assoc($result_pcode);
                                    echo $row_p["tel"];
                                ?>
                            </td>
                            <td><a href="delete_order.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('是否刪除???')">刪除</a></td>
                        </tr>
                            <?php } ?>
                    </table>
                </div>
                <!-- .table-responsive -->
                    <div class="col-md-4 col-md-offset-8">今日飲料金額：<?php echo $row_sum["total"] ?></div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->                        

</body>

</html>
