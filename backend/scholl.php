<?php 
    require_once("connect_database.php");
    $sql = "SELECT * FROM `scholl`";
    $result = mysql_query($sql);
    if(!isset($_SESSION["USER"])){ 
        header("Location:login.php");
    }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>後台</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/sb-admin.css" rel="stylesheet">
    <link href="../css/plugins/morris.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/reset.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>

<body>
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
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i>查看訂單</a>
                    </li>
                    <li class="active">
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
                            查看分校<small><!-- Statistics Overview --></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                        <a href="scholl_add.php" class="btn btn-default">新增分校</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="container table">
                        <tr>
                            <td>id</td>
                            <td>分校名稱</td>
                            <td>分校地址</td>
                            <td>分校id</td>
                            <td>修改</td>
                        </tr>
                        <?php while($row = mysql_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $row["sid"]; ?></td>
                            <td><?php echo $row["sname"]; ?></td>
                            <td><?php echo $row["saddress"]; ?></td>
                            <td><?php echo $row["scode"]; ?></td>
                            <td><a href="scholl_modify.php?sid=<?php echo $row["sid"]; ?>">修改</a></td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
                <!-- .table-responsive -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
</body>

</html>
