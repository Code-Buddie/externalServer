<?php

require "./config.php";
$sql = "SELECT email, name, date FROM `users` GROUP BY email";
try {
    $stmt = $connection->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
    $stmt->execute();
} catch (PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}

?>

<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Ziwa</title>
    <meta name="description" content="Ziwa: Bootstrap Responsive Admin Theme">
    <meta name="viewport" content="width=device-width">
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap-responsive.min.css" />
    <link type="text/css" rel="stylesheet" href="assets/Font-awesome/css/font-awesome.min.css" />
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    <link type="text/css" rel="stylesheet" href="assets/css/DT_bootstrap.css" />
    <link rel="stylesheet" href="assets/css/responsive-tables.css">

    <link rel="stylesheet" href="assets/css/theme.css">

    <script type="text/javascript" src="assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE 7]>
        <link type="text/css" rel="stylesheet" href="assets/Font-awesome/css/font-awesome-ie7.min.css"/>
        <![endif]-->
</head>

<body>
    <!-- #wrap -->
    <div id="wrap">
        <!-- #top -->
        <div id="top">
            <!-- .navbar -->
            <div class="navbar navbar-inverse navbar-static-top">
                <div class="navbar-inner">
                    <div class="container-fluid">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <a class="brand" href="index.html">Ziwa</a>

                        <div class="btn-toolbar topnav">
                            <div class="btn-group">
                                <a id="changeSidebarPos" class="btn btn-success" rel="tooltip" data-original-title="Show / Hide Sidebar"
                                    data-placement="bottom">
                                    <i class="icon-resize-horizontal"></i>
                                </a>
                            </div>
                        </div>
                        <!-- /.topnav -->
                        <div class="nav-collapse collapse">
                            <!-- .nav -->
                            <ul class="nav">
                                <li>
                                    <a href="index.php">Dashboard</a></li>
                                <li class="active">
                                    <a href="index.php">Visitors</a></li>
                                <li>
                                    <a href="members.php">Returning visitors</a></li>
                                <li>
                                    <a href="sort-by-date.php">Sort by date</a></li>
                            </ul>
                            <!-- /.nav -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.navbar -->
        </div>
        <!-- /#top -->
        <!-- .head -->
        <header class="head">
            <div class="search-bar">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="search-bar-inner">
                            <a id="menu-toggle" href="#menu" data-toggle="collapse" class="accordion-toggle btn btn-inverse visible-phone"
                                rel="tooltip" data-placement="bottom" data-original-title="Show/Hide Menu">
                                <i class="icon-sort"></i>
                            </a>

                            <form class="main-search">
                                <input class="input-block-level" type="text" placeholder="Live search...">
                                <button id="searchBtn" type="submit" class="btn btn-inverse"><i class="icon-search"></i>
                                </button>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
            <!-- ."main-bar -->
            <div class="main-bar">
                <div class="container-fluid">
                    <div class="row-fluid">
                        <div class="span12">
                            <h3><i class="icon-table"></i> Ziwa</h3>
                        </div>
                    </div>
                    <!-- /.row-fluid -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.main-bar -->
        </header>
        <!-- /.head -->

        <!-- #left -->
        <div id="left">
            <!-- .user-media -->
            <div class="media user-media hidden-phone">
                <a href="" class="user-link">
                    <img src="assets/img/user.gif" alt="User Picture" class="media-object img-polaroid user-img">
                    <span class="label user-label">16</span>
                </a>

                <div class="media-body hidden-tablet">
                    <h5 class="media-heading">Ziwa</h5>
                    <ul class="unstyled user-info">
                        <li><a href="">Administrator</a></li>
                        <li>Last Access : <br />
                            <small><i class="icon-calendar"></i> 16 Mar 16:32</small>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.user-media -->
            <!-- #menu -->
            <ul id="menu" class="unstyled accordion collapse in">
                <li class="accordion-group ">
                    <a data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#dashboard-nav">
                        <i class="icon-user icon-large"></i> Dashboard <span class="label label-inverse pull-right"><i
                                class="icon-download icon-large"></i></span>
                    </a>
                    <ul class="collapse " id="dashboard-nav">
                        <li><a href="index.php"><i class="icon-angle-right"></i> Visitors</a></li>
                        <li><a href="members.php"><i class="icon-angle-right"></i> Returning visitors</a></li>
                        <li><a href="sort-by-date.php"><i class="icon-angle-right"></i> Sort by date</a></li>
                    </ul>
                </li>
                <li class="accordion-group ">
                    <a data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i class="icon-file icon-large"></i> Downloads <span class="label label-inverse pull-right"><i
                                class="icon-download icon-large"></i></span>
                    </a>
                    <ul class="collapse " id="component-nav">
                        <li><a href="download.php"><i class="icon-angle-right"></i> Visitors.xls</a></li>
                        <li><a href="download_return.php"><i class="icon-angle-right"></i> Returning visitors.xls</a></li>
                    </ul>
                </li>
            </ul>
            <!-- /#menu -->

        </div>
        <!-- /#left -->

        <!-- #content -->
        <div id="content">
            <!-- .outer -->
            <div class="container-fluid outer">
                <div class="row-fluid">
                    <!-- .inner -->
                    <div class="span12 inner">
                        <!--Begin Datatables-->
                        <div class="row-fluid">
                            <div class="span12">
                                <div class="box">
                                    <header>
                                        <div class="icons"><i class="icon-move"></i></div>
                                        <h5>All visitors</h5>
                                    </header>
                                    <div id="collapse4" class="body">
                                        <table id="dataTable" class="table table-bordered table-condensed table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>SNO</th>
                                                    <th>NAME</th>
                                                    <th>EMAIL</th>
                                                    <th>DATE</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
$count = 1;
while ($value = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
    echo "<tr><td>" . $count . "</td><td>" . $value[1] . "</td><td>" . $value[0] . "</td><td>" . $value[2] . "</td> </tr>";
    $count++;
}
?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Datatables-->
                    </div>
                    <!-- /.inner -->
                </div>
                <!-- /.row-fluid -->
            </div>
            <!-- /.outer -->
        </div>
        <!-- /#content -->
        <!-- #push do not remove -->
        <div id="push"></div>
        <!-- /#push -->
    </div>
    <!-- /#wrap -->
    <div id="footer">
        <p>
            <?php echo date("Y"); ?> © Ziwa Admin</p>
    </div>



    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.10.1.min.js"><\/script>')
    </script>

    <!--
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script>window.jQuery.ui || document.write('<script src="assets/js/vendor/jquery-ui-1.10.0.custom.min.js"><\/script>')</script>
        -->

    <script src="assets/js/vendor/bootstrap.min.js"></script>

    <script type="text/javascript" src="assets/js/lib/jquery.tablesorter.min.js"></script>
    <script type="text/javascript" src="assets/js/lib/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="assets/js/lib/DT_bootstrap.js"></script>
    <script src="assets/js/lib/responsive-tables.js"></script>
    <script type="text/javascript">
        $(function () {
            metisTable();
        });
    </script>
    <script type="text/javascript" src="assets/js/main.js"></script>


    <script type="text/javascript" src="assets/js/style-switcher.js"></script>
</body>

</html>