<?php
session_start();

if (!$_SESSION['username']) {
  header("location: index.html");
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title> Mother | Home </title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <!-- Bootstrap 3.3.2 -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <!-- FontAwesome 4.3.0 -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <!-- Ionicons 2.0.0 -->
  <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
  <!-- Theme style -->
  <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
  <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
  <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
  <!-- iCheck -->
  <link href="plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
  <!-- Morris chart -->
  <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
  <!-- jvectormap -->
  <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
  <!-- Date Picker -->
  <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
  <!-- Daterange picker -->
  <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
  <!-- bootstrap wysihtml5 - text editor -->
  <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="js/jquery_1.5.2.js"></script>
  <script type="text/javascript" src="js/javascript.js"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->


  <script>
    function acceptBtnFun(obj) {

      $.ajax({
        type: 'POST',
        url: 'mother_accept.php',
        data: {
          id: obj
        },
        success: function(response) {

        }
      });

    }

    function cancelBtnFun(obj) {
      $.ajax({
        type: 'POST',
        url: 'mother_cancel.php',
        data: {
          id: obj
        },
        success: function(response) {

        }
      });

    }
  </script>

</head>

<body class="skin-blue">


  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="index.php" class="logo"><b>Mother & Baby Care </b></a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope-o"></i>
                <span class="label label-success">4</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 4 messages</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li>
                      <!-- start message -->
                      <a href="#">
                        <div class="pull-left">
                          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                        </div>
                        <h4>
                          Support Team
                          <small><i class="fa fa-clock-o"></i> 5 mins</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                      </a>
                    </li><!-- end message -->
                    <li>
                      <a href="#">
                        <div class="pull-left">
                          <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="user image" />
                        </div>
                        <h4>
                          Test Design Team
                          <small><i class="fa fa-clock-o"></i> 2 hours</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="pull-left">
                          <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="user image" />
                        </div>
                        <h4>
                          Developers
                          <small><i class="fa fa-clock-o"></i> Today</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="pull-left">
                          <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="user image" />
                        </div>
                        <h4>
                          Sales Department
                          <small><i class="fa fa-clock-o"></i> Yesterday</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="pull-left">
                          <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="user image" />
                        </div>
                        <h4>
                          Reviewers
                          <small><i class="fa fa-clock-o"></i> 2 days</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer"><a href="#">See All Messages</a></li>
              </ul>
            </li>
            <!-- Notifications: style can be found in dropdown.less -->
            <li class="dropdown notifications-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bell-o"></i>
                <span class="label label-warning">10</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 10 notifications</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-users text-red"></i> 5 new members joined
                      </a>
                    </li>

                    <li>
                      <a href="#">
                        <i class="fa fa-shopping-cart text-green"></i> 25 assignments uploaded
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
              </ul>
            </li>
            <!-- Tasks: style can be found in dropdown.less -->
            <li class="dropdown tasks-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-flag-o"></i>
                <span class="label label-danger">9</span>
              </a>
              <ul class="dropdown-menu">
                <li class="header">You have 9 tasks</li>
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <li>
                      <!-- Task item -->
                      <a href="#">
                        <h3>
                          Design some buttons
                          <small class="pull-right">20%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">20% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li><!-- end task item -->
                    <li>
                      <!-- Task item -->
                      <a href="#">
                        <h3>
                          Create a nice theme
                          <small class="pull-right">40%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">40% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li><!-- end task item -->
                    <li>
                      <!-- Task item -->
                      <a href="#">
                        <h3>
                          Some task I need to do
                          <small class="pull-right">60%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">60% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li><!-- end task item -->
                    <li>
                      <!-- Task item -->
                      <a href="#">
                        <h3>
                          Make beautiful transitions
                          <small class="pull-right">80%</small>
                        </h3>
                        <div class="progress xs">
                          <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                            <span class="sr-only">80% Complete</span>
                          </div>
                        </div>
                      </a>
                    </li><!-- end task item -->
                  </ul>
                </li>
                <li class="footer">
                  <a href="#">View all tasks</a>
                </li>
              </ul>
            </li>
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="dist/img/avatar04.png" class="user-image" alt="User Image" />
                <!-- <li class="user-name"><strong>Hey ! :-)</strong>
              
            </li> -->
                <span class="hidden-xs">
                  <?php
                  $conn = mysqli_connect('localhost', 'root', '', 'm&bc');
                  $query = "SELECT userName FROM mother_register WHERE sid='1';";
                  $respond = mysqli_query($conn, $query);
                  mysqli_close($conn);
                  while ($row = mysqli_fetch_assoc($respond)) {
                    echo $row['userName'];
                  }
                  ?>
				
                </span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="dist/img/avatar04.png" class="img-circle" alt="User Image" />
                  <p>
                   Sanjana - Mother
                    <small>Member since Nov. 2022</small>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>

                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="../profile/index.php" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="Logout.php" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search..." />
            <span class="input-group-btn">
              <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
            </span>
          </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">MAIN NAVIGATION</li>
          <li class="active treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a href="index.php"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="../../doc_request/index.html">
              <i class="fa fa-edit"></i> <span>Doctor Request</span>
            </a>
          </li>

          <li>
            <a href="../cal/3-calendar.php">
              <i class="fa fa-calendar"></i> <span>Calendar</span>
              <small class="label pull-right bg-red">3</small>
            </a>
          </li>

          <li class="treeview">
            <a href="../todolist/index.php">
              <i class="fa fa-list"></i> <span>Do List</span>

            </a>
          </li>
          <li class="treeview">
            <a href="../../chat/index.php">
              <i class="fa fa-envelope"></i> <span>Chat</span>

            </a>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Dashboard
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h4>
                  <?php
                  $conn = mysqli_connect('localhost', 'root', '', 'm&bc');
                  $query = "SELECT moh FROM mother_register;";
                  $respond = mysqli_query($conn, $query);
                  mysqli_close($conn);
                  $respond = mysqli_fetch_assoc($respond);
                  echo $respond['moh'];
                  ?>
                </h4>
                <p>Division</p>
              </div>
              <div class="icon">
                <i class="ion ion-location"></i>
              </div>
              <a class="small-box-footer">View <i id="viewreq" class="fa fa-arrow-circle-right"></i></a>
              <div id="hidden" style="display : none;" class="inner">
                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'm&bc');
                $query = "SELECT * FROM mother_register;";
                $respond = mysqli_query($conn, $query);
                mysqli_close($conn);
                while ($row = mysqli_fetch_assoc($respond)) {
                  echo $row['moh'] . " " . $row['mid'];
                }
                ?>
              </div>
            </div>
          </div><!-- ./col -->

          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h4>

                  <?php
                  $conn = mysqli_connect('localhost', 'root', '', 'm&bc');
                  $query = "SELECT name FROM midwife;";
                  $respond = mysqli_query($conn, $query);
                  mysqli_close($conn);
                  $respond = mysqli_fetch_assoc($respond);
                  echo $respond['name'];
                  ?>
                </h4>

                <p>Assigned Midwife</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a class="small-box-footer">View <i id="viewreq" class="fa fa-arrow-circle-right"></i></a>
              <div id="hidden" style="display : none;" class="inner">
                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'm&bc');
                $query = "SELECT * FROM midwife;";
                $respond = mysqli_query($conn, $query);
                mysqli_close($conn);
                while ($row = mysqli_fetch_assoc($respond)) {
                  echo $row['name'] . " " . $row['midwife_ID'];
                }
                ?>
              </div>
            </div>
          </div><!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h4>
                  <?php
                  $conn = mysqli_connect('localhost', 'root', '', 'm&bc');
                  $query = "SELECT pregnent FROM mother_register;";
                  $respond = mysqli_query($conn, $query);
                  mysqli_close($conn);
                  $respond = mysqli_fetch_assoc($respond);
                  echo $respond['pregnent'];
                  ?>
                </h4>
                <p>Pregnancy Status</p>
              </div>
              <div class="icon">
                <i class="ion ion-woman"></i>
              </div>
              <a class="small-box-footer">View <i id="viewreq" class="fa fa-arrow-circle-right"></i></a>
              <div id="hidden" style="display : none;" class="inner">
                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'm&bc');
                $query = "SELECT * FROM mother_register;";
                $respond = mysqli_query($conn, $query);
                mysqli_close($conn);
                while ($row = mysqli_fetch_assoc($respond)) {
                  echo $row['moh'] . " " . $row['mid'];
                }
                ?>
              </div>
            </div>
          </div><!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h4>27</h4>
                <p>Age</p>
              </div>
              <div class="icon">
                <i class="ion ion-clock"></i>
              </div>
              <a class="small-box-footer">View <i id="viewreq" class="fa fa-arrow-circle-right"></i></a>
              <div id="hidden" style="display : none;" class="inner">
                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'm&bc');
                $query = "SELECT * FROM mother_register;";
                $respond = mysqli_query($conn, $query);
                mysqli_close($conn);
                while ($row = mysqli_fetch_assoc($respond)) {
                  echo $row['moh'] . " " . $row['mid'];
                }
                ?>
              </div>
            </div>
          </div><!-- ./col -->
        </div><!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="nav-tabs-custom">
              <!-- Tabs within a box -->
              <ul class="nav nav-tabs pull-right">

                <li class="pull-left header"><i class="fa fa-inbox"></i> Weight Chart</li>
              </ul>
              <div class="tab-content no-padding">
                <?php include('../chart.php') ?>
                <!-- Morris chart - Sales -->
              </div>
            </div><!-- /.nav-tabs-custom -->
            <!-- Chat box -->
            <div class="box box-success">
              <div class="box-header">
                <i class="fa fa-comments-o"></i>
                <h3 class="box-title">Ask from Us</h3>
                <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                  <div class="btn-group" data-toggle="btn-toggle">
                    <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                  </div>
                </div>
              </div>
              <div class="box-body chat" id="chat-box">
                <!-- chat item -->
                <div class="item">
                  <img src="dist/img/user4-128x128.jpg" alt="user image" class="online" />
                  <p class="message">
                    <a href="#" class="name">
                      <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>
                      Thanuli De Silva
                    </a>
                    I would like to know about and discuss the health programs and clinic. Someone said it is going to be next month and I'm waiting for that.
                  </p>
                  <div class="attachment">
                    <h4>Admin:</h4>
                    <p class="filename">
                      Yes..Indeed we are planing to conduct a new session next week first monday. Feel free to email or whatsAPP us or chat with us any time we'll update you with the latest programs and old programs recored details.
                    </p>

                  </div><!-- /.attachment -->
                </div><!-- /.item -->
                <!-- chat item -->
                <div class="item">
                  <img src="dist/img/user3-128x128.jpg" alt="user image" class="offline" />
                  <p class="message">
                    <a href="#" class="name">
                      <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>
                      Alexander Pierce
                    </a>
                    I would like to meet you to discuss the latest news about
                    the university. They say it is going to be one the
                    best in the worldwide.
                  </p>
                </div><!-- /.item -->
                <!-- chat item -->
                <div class="item">
                  <img src="dist/img/user2-160x160.jpg" alt="user image" class="offline" />
                  <p class="message">
                    <a href="#" class="name">
                      <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:30</small>
                      Susan Doe
                    </a>
                    I would like to meet you to discuss the latest news about
                    the university. They say it is going to be one the
                    best in the worldwide.
                  </p>
                </div><!-- /.item -->
              </div><!-- /.chat -->
              <div class="box-footer">
                <div class="input-group">
                  <input class="form-control" placeholder="Type message..." />
                  <div class="input-group-btn">
                    <button class="btn btn-success"><i class="fa fa-plus"></i></button>
                  </div>
                </div>
              </div>
            </div><!-- /.box (chat box) -->

            <!-- TO DO List -->
            <div class="box box-primary">
              <div class="box-header">
                <i class="ion ion-clipboard"></i>
                <h3 class="box-title">Upcoming</h3>
                <div class="box-tools pull-right">
                </div>
              </div><!-- /.box-header -->
              <div class="box-body">

                <ul class="todo-list">
                  <?php
                  include "config.php"; //Database connection settings

                  //This function formats and adds link to all URLs in a content
                  function add_links_to_URLs($to_do_contents = '')
                  {
                    $to_do_contents = preg_replace('#(script|about|applet|activex|chrome):#is', "\\1:", $to_do_contents);
                    $to_do_content_pr = ' ' . $to_do_contents;
                    $to_do_content_pr = preg_replace("#(^|[\n ])([\w]+?://[\w\#$%&~/.\-;:=,?@\[\]+]*)#is", "\\1<span class='ccc'><a href=\"\\2\" target=\"_blank\"><font style='font-family: Verdana, Geneva, sans-serif;color: blue;font-size:11px; line-height:20px;'>\\2</font></a></span>", $to_do_content_pr);
                    $to_do_content_pr = preg_replace("#(^|[\n ])((www|ftp)\.[\w\#$%&~/.\-;:=,?@\[\]+]*)#is", "\\1<span class='ccc'><a href=\"http://\\2\" target=\"_blank\"><font style='font-family: Verdana, Geneva, sans-serif;color: blue;font-size:11px; line-height:20px;'>\\2</font></a></span>", $to_do_content_pr);
                    $to_do_content_pr = preg_replace("#(^|[\n ])([a-z0-9&\-_.]+?)@([\w\-]+\.([\w\-\.]+\.)*[\w]+)#i", "\\1<span class='ccc'><a href=\"mailto:\\2@\\3\"><font style='font-family: Verdana, Geneva, sans-serif;color: blue;font-size:11px; line-height:20px;'>\\2@\\3</font></a></span>", $to_do_content_pr);
                    return substr($to_do_content_pr, 1);
                  }

                  $username = strip_tags($_SERVER['REMOTE_ADDR']); //Users Identity

                  $check_recently_added_item = mysql_query("select * from `to_do_list_contents` order by `id` desc");
                  if (mysql_num_rows($check_recently_added_item) < 1) {
                    echo "<div class='info' id='vpb_empty' style='width:450px;'>Hello, there are no new Todo items to display at the moment. Thanks.</div>";
                  } else {
                    while ($get_recently_added_item = mysql_fetch_array($check_recently_added_item)) {
                  ?>
                      <div id="vpb_to_deletion<?php echo strip_tags($get_recently_added_item["id"]); ?>">

                        <div align="left" style="width:450px;" id="mainBoxWrappers">

                          <div id="edit_content<?php echo strip_tags($get_recently_added_item["id"]); ?>">

                            <div id="vpb_tod_text_contents" align="left">
                              <span id="todo_deletion_status<?php echo strip_tags($get_recently_added_item["id"]); ?>"></span><?php echo add_links_to_URLs(nl2br(strip_tags($get_recently_added_item["content"]))); ?>
                            </div>



                          </div>
                          <div style="display:none" id="edit_box<?php echo strip_tags($get_recently_added_item["id"]); ?>">

                            <div style="width:320px; float:left;" align="left">
                              <span id="display_new_todo_status<?php echo strip_tags($get_recently_added_item["id"]); ?>"></span>
                              <textarea style="width:290px;" id="vpb_Todo_content<?php echo strip_tags($get_recently_added_item["id"]); ?>" class="textAreaBox"><?php echo strip_tags($get_recently_added_item["content"]); ?></textarea>
                            </div>

                            <div style="width:55px; float:left; margin-right:10px;" align="left">
                              <input style="" type="button" id="vasplus_p_blog_save_button" value="Save" onclick="VPB_Save_New_Todo('<?php echo strip_tags($get_recently_added_item["id"]); ?>');" />
                            </div>

                            <div style="width:65px; float:left;" align="left"><input type="button" id="vasplus_p_blog_cancel_button" value="Cancel" onclick="vpb_cancel('<?php echo strip_tags($get_recently_added_item["id"]); ?>');" />
                            </div><br clear="all" />

                          </div>

                          <br clear="all" />
                        </div><br clear="all" />
                      </div>
                  <?php
                    }
                  }
                  ?>
                  </center>
                  <script type="text/javascript" language="javascript" src="js/vasplus_p_programming_blog_textarea_box.js"></script>
                  <!--Textarea Box Plugin-->
                  <!--To-do Code Ends Here -->

                </ul>
              </div><!-- /.box-body -->

            </div>
            <!-- /.box -->

            </br>
            <!-- Doctore Meeting -->
            <div class="box box-primary">
              <div class="box-header">
                <i class="ion ion-clipboard"></i>
                <h3 class="box-title">Clinic schedule</h3>
                <div class="box-tools pull-right">
                </div>
              </div><!-- /.box-header -->
              <div class="box-body">

                <ul class="todo-list">
                  <?php
                  include("config1.php"); //Database connection settings



                  $username = strip_tags($_SERVER['REMOTE_ADDR']); //Users Identity
                  $log_user = $_SESSION['username'];
                  $nic = $_SESSION['nic'];
                  $logged_as = $_SESSION['logged_as'];



                  $check_recently_added_item = mysql_query("select * from `mother_allocation_rqst` where mother_nic='$nic' order by `id` desc");
                  
                  if (mysql_num_rows($check_recently_added_item) < 1) {
                    echo "<div class='info' id='vpb_empty' style='width:450px;'>Hello, there are no new meeting to display at the moment. Thanks.</div>";
                  } else {
                    while ($get_recently_added_item = mysql_fetch_array($check_recently_added_item)) {

                      $id = $get_recently_added_item["id"];
                      $accept_or_not = $get_recently_added_item["accept_or_not"];
                      $clid = $id + 100;//cancel id

                      if ($accept_or_not == 0) { //assign value to php variable (for css property)  
                        $accpt_display = 'none';
                        $cancel_display = 'none';
                      } else if ($accept_or_not == 1) {
                        $accpt_display = 'flex';
                        $cancel_display = 'none';
                      } else {
                        $accpt_display = 'none';
                        $cancel_display = 'flex';
                      }
                      $display = 'none';
                  ?>
                      <div id="vpb_to_deletion<?php echo strip_tags($get_recently_added_item["id"]); ?>">

                        <div align="left" style="width:100%;" id="mainBoxWrappers">

                          <div id="edit_content<?php echo strip_tags($get_recently_added_item["id"]); ?>">

                            <div id="vpb_tod_text_contents" align="left">
                              <span id="todo_deletion_status<?php echo strip_tags($get_recently_added_item["id"]); ?>"></span>
                              <?php echo add_links_to_URLs(nl2br(strip_tags($get_recently_added_item["alloc_date"]))); ?>
                              <span id='<?php echo $id; ?>' style="display:<?php echo $accpt_display; ?>;float: right;text-align:center;">&#9989;</span><span id='<?php echo $clid; ?>' style="display:<?php echo $cancel_display; ?>;float: right;text-align:center;">&#10060;</span>
                              <div class="pull-right box-tools">
                                <button class="btn btn-danger btn-sm" id="cl_btn" onclick="cancelBtnFun('<?php echo $id; ?>');cancelMark('<?php echo $clid; ?>');" data-widget="" data-toggle="tooltip" title=""><i class="fa fa-times"></i></button>

                              </div><!-- /. tools -->

                              <div class="pull-right box-tools" style="margin-right:5px">
                                <button class="btn btn-info btn-sm" id="accept_btn" onclick="acceptBtnFun('<?php echo $id; ?>');acceptMark('<?php echo $id; ?>');" data-widget="" data-toggle="tooltip" title=""><i class="fa fa-check" aria-hidden="true"></i></button>
                              </div>

                            </div>



                          </div>
                          <div style="display:none" id="edit_box<?php echo strip_tags($get_recently_added_item["id"]); ?>">

                            <div style="width:320px; float:left;" align="left">
                              <span id="display_new_todo_status<?php echo strip_tags($get_recently_added_item["id"]); ?>"></span>
                              <textarea style="width:290px;" id="vpb_Todo_content<?php echo strip_tags($get_recently_added_item["id"]); ?>" class="textAreaBox"><?php echo strip_tags($get_recently_added_item["content"]); ?></textarea>
                            </div>

                            <div style="width:55px; float:left; margin-right:10px;" align="left">
                              <input style="" type="button" id="vasplus_p_blog_save_button" value="Save" onclick="VPB_Save_New_Todo('<?php echo strip_tags($get_recently_added_item["id"]); ?>');" />
                            </div>

                            <div style="width:65px; float:left;" align="left"><input type="button" id="vasplus_p_blog_cancel_button" value="Cancel" onclick="vpb_cancel('<?php echo strip_tags($get_recently_added_item["id"]); ?>');" />
                            </div><br clear="all" />

                          </div>

                          <br clear="all" />
                        </div><br clear="all" />
                      </div>
                  <?php
                    }
                  }
                  ?>
                  </center>
                  <script type="text/javascript" language="javascript" src="js/vasplus_p_programming_blog_textarea_box.js"></script>
                  <!--Textarea Box Plugin-->
                  <!--To-do Code Ends Here -->

                </ul>
              </div>
            </div>

            <!-- quick email widget -->
            <div class="box box-info">
              <div class="box-header">
                <i class="fa fa-envelope"></i>
                <h3 class="box-title">Quick Email</h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                  <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div><!-- /. tools -->
              </div>
              <div class="box-body">
                <form action="email_sender.php" method="post">
                  <div class="form-group">
                    <input type="email" class="form-control" name="emailto" placeholder="Email to:" />
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" placeholder="Subject" />
                  </div>
                  <div>
                    <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>
                </form>
              </div>
              <div class="box-footer clearfix">
                <button class="pull-right btn btn-default" id="sendEmail">Send <i class="fa fa-arrow-circle-right"></i></button>
              </div>
            </div>

          </section><!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

            <!-- Map box -->
            <div class="box box-solid bg-light-blue-gradient">
              <div class="box-header">
                <!-- tools box -->
                <div class="pull-right box-tools">
                  <button class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip" title="Date range"><i class="fa fa-calendar"></i></button>
                  <button class="btn btn-primary btn-sm pull-right" data-widget='collapse' data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>
                </div><!-- /. tools -->

                <i class="fa fa-map-marker"></i>
                <h3 class="box-title">
                  Clinic visits
                </h3>
              </div>
              <div class="box-body">
                <div id="world-map" style="height: 250px; width: 100%;"></div>
              </div><!-- /.box-body-->
              <div class="box-footer no-border">
                <div class="row">
                  <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                    <div id="sparkline-1"></div>
                    <div class="knob-label">This Week</div>
                  </div><!-- ./col -->
                  <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                    <div id="sparkline-2"></div>
                    <div class="knob-label">This Month</div>
                  </div><!-- ./col -->
                  <div class="col-xs-4 text-center">
                    <div id="sparkline-3"></div>
                    <div class="knob-label">This Year</div>
                  </div><!-- ./col -->
                </div><!-- /.row -->
              </div>
            </div>
            <!-- /.box -->

            <!-- solid sales graph -->
            <div class="box box-solid bg-teal-gradient">
              <div class="box-header">
                <i class="fa fa-th"></i>
                <h3 class="box-title">Threeposha Graph</h3>
                <div class="box-tools pull-right">
                  <button class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  <button class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
              </div>
              <div class="box-body border-radius-none">
                <div class="chart" id="line-chart" style="height: 250px;"></div>
              </div><!-- /.box-body -->
              <div class="box-footer no-border">
                <div class="row">
                  <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                    <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgColor="#39CCCC" />
                    <div class="knob-label">This month</div>
                  </div><!-- ./col -->
                  <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                    <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgColor="#39CCCC" />
                    <div class="knob-label">This week</div>
                  </div><!-- ./col -->
                  <div class="col-xs-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgColor="#39CCCC" />
                    <div class="knob-label">This year</div>
                  </div><!-- ./col -->
                </div><!-- /.row -->
              </div><!-- /.box-footer -->
            </div><!-- /.box -->

            <!-- Calendar -->
            <div class="box box-solid bg-green-gradient">
              <div class="box-header">
                <i class="fa fa-calendar"></i>
                <h3 class="box-title">Calendar</h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                  <!-- button with a dropdown -->
                </div>
                <div class="btn-group">


                </div>


              </div><!-- /.box -->

          </section><!-- right col -->
        </div><!-- /.row (main row) -->

      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.0
      </div>
      <strong>&copy; Copyright <a href="#"> M & BC </a> All Rights Reserved</strong> 2022.
    </footer>
  </div><!-- ./wrapper -->

  <!-- jQuery 2.1.3 -->
  <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
  <!-- jQuery UI 1.11.2 -->
  <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.2 JS -->
  <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <!-- Morris.js charts -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="plugins/morris/morris.min.js" type="text/javascript"></script>
  <!-- Sparkline -->
  <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
  <!-- jvectormap -->
  <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
  <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/knob/jquery.knob.js" type="text/javascript"></script>
  <!-- daterangepicker -->
  <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
  <!-- datepicker -->
  <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
  <!-- iCheck -->
  <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
  <!-- Slimscroll -->
  <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
  <!-- FastClick -->
  <script src='plugins/fastclick/fastclick.min.js'></script>
  <!-- AdminLTE App -->
  <script src="dist/js/app.min.js" type="text/javascript"></script>

  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js" type="text/javascript"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js" type="text/javascript"></script>
  <script>
    // var box = document.getElementById("tick");

    function acceptMark(obj) {
      var cn = parseInt(obj) + 100;
      var accpt = document.getElementById(obj);
      var cancel = document.getElementById(cn);

      if (cancel.style.display == "flex") {// changing css props using javascript 
        cancel.style.display = "none";
        accpt.style.display = "flex";
      } else {
        accpt.style.display = "flex";
      }
    }

    function cancelMark(obj) {

      var cancel = document.getElementById(obj);
      var apt = parseInt(obj) - 100;

      var accpt = document.getElementById(apt);

      if (accpt.style.display == "flex") {
        accpt.style.display = "none";
        cancel.style.display = "flex";
      } else {
        cancel.style.display = "flex";
      }
    }
  </script>
</body>

</html>