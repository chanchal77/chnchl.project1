<?php 
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard</title>
<style>

.select {
    padding: 10px;
}
.button {
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

.button:hover {background-color: #619bce;
color:white;
}

.button:active {
  background-color: #619bce;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
  
}
/*name button*/
button[disabled], html input[disabled] {

    cursor: default;
    width: 200px;
    margin-left: 400px;
    height: 40px;

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
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
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
          <li><a href="data.php">Dashboard</a></li>
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
		  <li><a href="propertydetails.php"><i class="fa fa-circle-o"></i>View Property Details</a></li>
            <li><a href="leftpanel.php"><i class="fa fa-circle-o"></i> Add Property</a></li>
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
		<!-- <table id="example1">
			<tr>
				<td ><h2>Property List</h></td>
				<td><button name="add" ><p>Add Property</p></button></td>		 
			 </tr>
			</table>-->
			<div class="container" >
			
			<?php
				$id=$_GET['id'];
				$con = mysqli_connect('localhost','root','','demo6');
				
				$query = "SELECT * FROM `propertydetails` WHERE id = $id";
				
				$result = mysqli_query($con,$query);
				$row = mysqli_fetch_assoc($result);
				
			?>
			
			<form action="updatedb.php?id=<?php echo $row['id']; ?>" method="POST">
				<div class="col-lg-3">
					<div class="form-group">
					  <img src='<?php echo $row['image'] ?>' class="img-responsive" alt="image" />
					  <input type="file" name="img">
					</div>
				</div>
				<div class="col-lg-9">
					<table >
						<tr>
							<td colspan="4"><div class="select">
								<select name="Ptype">
									<option value="one" >Property Type</option>
									  <option value="Apartment" >Apartment</option>
									  <option value="Villa">Villa</option>
									  <option value="Independent house">Independent house</option>
									  <option value="Independent floor">Independent floor</option>
								</select>
								
								<button  name="type" disabled><?php echo $row['nameby']; ?></button>
							
							</div></td>
						</tr>
					
						<tr>
						
						<td>
							<div class="form-group">
							<label>Type</label>
								<input type="text"  value="<?php echo $row['type']; ?>" name="type">
							</div>
						</td>
						<td>
							<div class="form-group">
							<label>Category</label>
								<input type="text"  value="<?php echo $row['category']; ?>" name="category">
							</div>
						</td>
						<td>
							<div class="form-group">
							<label>Street</label>
								<input type="text"  value="<?php echo $row['street']; ?>" name="street">
							</div>
						</td></tr>
						 <tr><td>
						
							<div class="form-group"><label>City</label>
							  <input type= "text" value="<?php  echo $row['city']; ?>" name="city" >
							</div>
						</td>
						<td>
						
							<div class="form-group"><label>Locality</label>	  
							  <input type="text"  value="<?php  echo $row['locality']; ?>" name="locality">
							</div>
						</td>
						<td>
						
							<div class="form-group"> <label>Building</label>
								<input type="text"  value="<?php  echo $row['building']; ?>"  name="building">
							</div>
						</td>
						</tr>
					 
					 <tr><td>
					 <div class="select">
						<select name="Ttype">
						  <option value="0" >Transaction Type</option>
						  <option value="New Booking">New Booking</option>
						  <option value="Resale">Resale</option>
						  
						</select>
					</div></td>
					<td>
					 <div class="select">
						<select name="Cstatus">
						  <option value="0" >Construction Type</option>
						  <option value="Ready To Move">Ready To Move</option>
						  <option value="Under Construction">Under Construction</option>
						</select>
					</div></td>
					<td>
					 <div class="select">
						<select name="bathroom">
						  <option value="0" >Bathroom</option>
						  <option value="1">1</option>
						  <option value="2">2</option>
						  <option value="3">3</option>
						  <option value="4">4</option>
						</select>
					</div></td>
					<td>
					 <div class="select">
						<select name="bedroom">
						  <option value="0" >Bedroom</option>
						  <option value="1">1</option>
						  <option value="2">2</option>
						  <option value="3">3</option>
						  <option value="4">4</option>
						</select>
					</div></td></tr>
					
					<tr><td>
					 <div class="select">
						<select name="Ftype">
						  <option value="0" >Furnish Type</option>
						  <option value="Fully Furnished">Fully Furnished</option>
						  <option value="Semi Furnished">Semi Furnished</option>
						  <option value="Uurnished">Uurnished</option>
						</select>
					</div></td></tr>
					<tr><td>
					<label>Builtup Area</label>
					<div class="form-group">
					  <input type="text" value="<?php  echo $row['builtup']; ?>" name="builtup" >
					</div>
					</td>
					<td>
					<label>Age of the Property</label>
					<div class="form-group">
					  <input type="text" value="<?php  echo $row['age']; ?>" name="age" >
					</div>
					</td>
					<td>
					<label>Cost Or rent PM</label>
					<div class="form-group">
					  <input type="text" value="<?php  echo $row['cost']; ?>" name="cost" >
					</div>
					</td><td>
					<label>Maintenence</label>
					<div class="form-group">
					  <input type="text" value="<?php  echo $row['maintenence']; ?>" name="maintenence" >
					</div>
					</td>
					</tr>
					<tr><td colspan="4"> 
					<div class="form-group">
					 <a href="updatedb.php?id=<?php echo $row['id']; ?>" ><input type="submit" class="form-control" id="exampleInputPassword1" name="pass" value="Update"></a>
					</div>
				  </div></td></tr>
				</table>
			</div>
			</form>
			 
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
					<li><a href="#">Users</a></li>
				</ol>
			</section>
		</div>
            <!-- /.box-body -->
	</div>
          <!-- /.box -->

</div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
   <center>   <strong>Copyright &copy; 2019 All rights reserved. Design & Developed By <a href="https://ezacus.com/" target="_blank">VSYS Technology </a>.</strong> </center>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
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
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

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
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
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
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<script>
$('#custom7').on('change', function(){
   this.value = this.checked ? 1 : 0;
   // alert(this.value);
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
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

</body>
</html>
