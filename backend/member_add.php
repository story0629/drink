<?php 
    require_once("connect_database.php");
    $sql = "SELECT * FROM `member`";
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
                    <li class="active">
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
                            新增會員資料<small><!-- Statistics Overview --></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                    <form action="member_add_ok.php" class="myForm" method="post">
                        <div class="form-group"><label class="col-md-2 col-md-offset-1 col-sm-3 col-xs-4">帳號：</label><input type="text" placeholder="請輸入帳號" name="user" class="col-md-8 col-sm-8 col-xs-8"></div>
                        <div class="form-group"><label class="col-md-2 col-md-offset-1 col-sm-3 col-xs-4">密碼：</label><input type="text" placeholder="請輸入密碼" name="password" class="col-md-8 col-sm-8 col-xs-8"></div>
                        <div class="form-group"><label class="col-md-2 col-md-offset-1 col-sm-3 col-xs-4">姓名：</label><input type="text" placeholder="請輸入姓名" name="name" class="col-md-8 col-sm-8 col-xs-8"></div>
                        <div class="col-md-6 col-md-offset-5">
                            <br>
                            <input type="submit" value="送出" class="btn btn-default">
                            <input type="button" value="返回上頁" onclick="history.back()" class="btn btn-default">
                        </div>
                    </form>
          </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
</body>

</html>
