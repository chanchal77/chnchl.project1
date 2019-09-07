<?php
error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="widtd=device-widtd, initial-scale=1">
<title>Dashboard</title>
<style>
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro);
*{
  margin:0px;
  padding:0px;
}
html{
  background: #497dd0;
}
.wrapper1 {
  margin: 100px 0;
}
.toggle_radio{
  position: relative;
  background: rgba(255,255,255,.1);
  margin: 4px auto;
  overflow: hidden;
  padding: 0 !important;
  -webkit-border-radius: 50px;
  -moz-border-radius: 50px;
  border-radius: 50px;
  position: relative;
  height: 26px;
  width: 318px;
}
.toggle_radio > * {
  float: left;
}
.toggle_radio input[type=radio]{
  display: none;
  /*position: fixed;*/
}
.toggle_radio label{
  font: 90%/1.618 "Source Sans Pro";
  color: rgba(255,255,255,.9);
  z-index: 0;
  display: block;
  width: 100px;
  height: 20px;
  margin: 3px 3px;
  -webkit-border-radius: 50px;
  -moz-border-radius: 50px;
  border-radius: 50px;
  cursor: pointer;
  z-index: 1;
  /*background: rgba(0,0,0,.1);*/
  text-align: center;
  /*margin: 0 2px;*/
  /*background: blue;*/ /*make it blue*/
}
.toggle_option_slider{
  /*display: none;*/
  /*background: red;*/
  width: 100px;
  height: 20px;
  position: absolute;
  top: 3px;
  -webkit-border-radius: 50px;
  -moz-border-radius: 50px;
  border-radius: 50px;
  -webkit-transition: all .4s ease;
  -moz-transition: all .4s ease;
  -o-transition: all .4s ease;
  -ms-transition: all .4s ease;
  transition: all .4s ease;
}

#first_toggle:checked ~ .toggle_option_slider{
  background: rgba(255,255,255,.3);
  left: 3px;
}
#second_toggle:checked ~ .toggle_option_slider{
  background: rgba(255,255,255,.3);
  left: 109px;
}
#third_toggle:checked ~ .toggle_option_slider{
  background: rgba(255,255,255,.3);
  left: 215px;
}
/*button*/
button {
  padding: 15px 25px;
  font-size: 15px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: black;
  background-color: unset;
  border: none;
  border-radius: 15px;
  box-shadow: 0 10px #999;
 margin-bottom: 10px;
}

button:hover {background-color: #619bce;
color:white;
}

button:active {
  background-color: #619bce;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
  
}


</style>
</head>

<?php

// Include confi.php
include_once('config.php');
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Job Card</title>
  <!-- Tell tde browser to be responsive to screen widtd -->
  <meta content="widtd=device-widtd, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- tdeme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from tde css/skins
       folder instead of downloading all of tdem to reduce tde load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view tde page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Real</b>Estate</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
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
                <!-- inner menu: contains tde actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome tdeme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome tdeme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome tdeme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome tdeme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="../../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome tdeme?</p>
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
                <!-- inner menu: contains tde actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here tdat may not fit into tde
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
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
                <!-- inner menu: contains tde actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="widtd: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice tdeme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="widtd: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="widtd: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="widtd: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
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
              <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains tde logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" metdod="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="data.php">Dashboard</a>
        </li>
		 <li><a href="User.php"><i class="fa fa-book"></i> <span>Users</span></a></li>
		 <li><a href="Agent.php"><i class="fa fa-users" aria-hidden="true"></i><span>Agent</span></a></li>
		 <li><a href="Builder.php"><i class="fa fa-users" aria-hidden="true"></i><span>Builder</span></a></li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Manage Property</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="leftpanel.php"><i class="fa fa-circle-o"></i> Add Property</a></li>
			<li><a href="propertydetails.php"><i class="fa fa-circle-o"></i> View Property Details</a></li>
			<li><a href="update.php"><i class="fa fa-circle-o"></i>Update Property</a></li>
            <li class="active"><a href="data.html"><i class="fa fa-circle-o"></i> Delete Property</a></li>
			
          </ul>
        </li>
		<li><a href="feedbackadmin.php"><span>Feedback</span></a></li>
		<li><a href="reports.php"><span>Report</span></a></li>
		<li><a href="sellreport.php"><span>Sales Report</span></a></li>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
		<!--<table id="example1">
			<tr>
				<td ><h2>Property List</h></td>
				<td><button name="add" ><p>Add Property</p></button></td>		 
			 </tr>
			</table>-->
			
				
		
		  <ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Users</a></li>
		  </ol>
    </section>
	
		<?php
		$id=$_GET['id'];
		$con = mysqli_connect('localhost','root','','demo6');
		$query = "SELECT * FROM registration"; 
		$result = mysqli_query($con,$query);
	?>

	<table id="example2" class="table table-bordered table-hover">
		<tr>
                  <th>ID</th>
				  <th>Profile Photo</th>
				  <th>Username</th>
                  <th>email</th>
                  <th>Mobilr No.</th>
                  <th>category</th>
				  <th>Action<th>
				 
         </tr>
		 <?php
		 while($row = mysqli_fetch_array($result))
		 { 
?>
		  <tr>
                <td><?php echo $row['id']; ?></td>
				<td><img src='<?php echo $row['image'] ?>'class="img-responsive" alt="image" height="50" width="50"/>
				
				<td><?php echo $row['username']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['conpass'] ;?></td>
                <td><?php echo $row['category'] ;?></td>
				
				<td>
				 <div class="col-lg-2" >
					<a href="myprofiledb.php?id=<?php echo $row['id']; ?>"><button name="Property Details" >View User</button></a>
				</div>
				</td>
				
				<?php
		 }
				?>
            </tr>
	  
     </table>
	 
	 	
	
       
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

    </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
   <center>   <strong>Copyright &copy; 2019 All rights reserved. Design & Developed By <a href="https://ezacus.com/" target="_blank">Ezacus Technology Pvt.Ltd.</a>.</strong> </center>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create tde tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birtdday-cake bg-red"></i>

            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
       
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form metdod="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about tdis general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Otder sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose autdor name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow tde user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add tde sidebar's background. tdis div must be placed
       immediately after tde control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<script>
$('#custom7').on('change', function(){
   tdis.value = tdis.checked ? 1 : 0;
   // alert(tdis.value);
}).change();


function chState(element)
{
    if(element.checked) 
        element.value='true'; 
   else
       element.value='false';
}
</script>
<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengtdChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidtd'   : false
    })
  })
</script>

</body>
</html>
