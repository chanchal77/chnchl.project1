<?php
session_start();
error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="widtd=device-widtd, initial-scale=1">
<title>Dashboard</title>
<style>

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

button:hover {background-color: #0E5281;
color:white;
}

button:active {
  background-color: #619bce;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
  
}
p {
    color: white;
    margin-right: 20px;
    text-decoration: underline;
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
  <title>Real Estate</title>
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
      <span class="logo-mini"><b>R</b>E</span>
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
          
          <a href="login.html"><p>Logout</p></a>
        
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
        <!-- <div class="pull-left image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
       <div class="pull-left info">
          <p>Admin Panel</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>-->
      </div>
      <!-- search form -->
      <!--<form action="#" metdod="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>-->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="data.php">Home</a>
        </li>
		 <li><a href="User.php"><i class="fa fa-book"></i> <span>Users</span></a></li>
		 <li><a href="Agent.php"><i class="fa fa-users" aria-hidden="true"></i><span>Agent</span></a></li>
		 <li><a href="Builder.php"><i class="fa fa-users" aria-hidden="true"></i><span>Builder</span></a></li>
        
            <!--<span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>-->
          </a>
		 
          <!--<ul class="treeview-menu">
            <li><a href="../forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="../forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="../forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>-->
        </li>
		
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
			
				
		
		  
    </section>
	
		<div class="col-lg-2" >
			<a href="propertydetails.php"><button name="Property Details">Property Details</button></a>
		</div>
	
       
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

    </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
   <center>   <strong>Copyright &copy; 2019 All rights reserved. Design & Developed By <a href="https://vsys.com/" target="_blank">VSYS Technology Pvt.Ltd.</a>.</strong> </center>
  </footer>

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
