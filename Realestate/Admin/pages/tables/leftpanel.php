<!DOCTYPE html>
<html>
<head>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard</title>
<style>
/*container class*/
.col-lg-12 {
    width: 100%;
    display: block;
}
h3 {
    border-bottom: double;	

}
/*form design*/
#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

/* Style the input fields */
input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

/* Mark the active step: */
.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}

/*label of rediobutton*/
label {
    font-size: large;
	font-family: initial;
}
/*select tag*/
.select {
    display: ruby;
    margin-left: 20px;
    font-family: initial;
    font-size: large;
}
p {
    margin: inherit;
}
</style>
</head>


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
		
		 <li><a href="data.php"><i class="fa fa-book"></i> <span>Users</span></a></li>
		 <li><a href="data.php"><i class="fa fa-users" aria-hidden="true"></i><span>Seller</span></a></li>
		 <li><a href="data.php"><i class="fa fa-users" aria-hidden="true"></i><span>Devloper</span></a></li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Manage Property</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
		  
            <li><a href="leftpanel.php"><i class="fa fa-circle-o"></i> Add Property</a></li>
			<li><a href="propertydetails.php"><i class="fa fa-circle-o"></i>View Property Details</a></li>
			<li><a href="update.php"><i class="fa fa-circle-o"></i>Update Property</a></li>
            <li class="active"><a href="data.html"><i class="fa fa-circle-o"></i> Delete Property</a></li>upl
			
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
			
				
		
		  <ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Users</a></li>
		  </ol>
    </section>
	
	
	
		<!--main content-->
		<div class="container">
		<div class="col-lg-12"><h3>Property details</h3>
			<form action="add_db.php" enctype="multipart/form-data" method="post" id="regForm" > 
			
				<!-- One "tab" for each step in the form: -->
				<!--0th page-->
				<div class="tab"><h3>Proprty For</h3>
					<div class="radio">
					  <label><input type="radio" name="type" checked value="Rent">Rent</label>
					</div>
					<div class="radio">
					  <label><input type="radio" name="type" value="Sell">Sell</label>
					</div>
					<div class="select">
					<p>By</p>
					<select name="category">
					  <option name="Admin" value="Admin">Select</option>
					  <option name="Agent" value="Agent">Agent</option>
					  <option name="Builder" value="Builder">Builder</option>
					 </select>
					 
					 </div>
					<input type="text" name="nameby" placeholder="Enter Your Name" />
					<!--<p><input placeholder="First name..." oninput="this.className = ''"></p>
					<p><input placeholder="Last name..." oninput="this.className = ''"></p>-->
				</div>
				<!--1st page-->
				<div class="tab"><h3>Proprty Type</h3>
					<div class="radio">
					  <label><input type="radio" name="Ptype" checked value="apartment">Apartment</label>
					</div>
					<div class="radio">
					  <label><input type="radio" name="Ptype" value="vill">Villa</label>
					</div>
					<div class="radio disabled">
					  <label><input type="radio" name="Ptype" value="plot">Plot</label>
					</div> 
					<div class="radio ">
					  <label><input type="radio" name="Ptype" value="independenthouse">Independent House</label>
					</div>
					<div class="radio ">
					  <label><input type="radio" name="Ptype" value="independentfloor">Independent floor</label>
					</div>
					<!--<p><input placeholder="First name..." oninput="this.className = ''"></p>
					<p><input placeholder="Last name..." oninput="this.className = ''"></p>-->
				</div>
				<!--2st page-->
				<div class="tab"><h3>Property Location</h3>
				  <p><input placeholder="Street " oninput="this.className = ''" name="street"></p>
				  <p><input placeholder="City" oninput="this.className = ''" name="city"></p>
				  <p><input placeholder="Locality" oninput="this.className = ''" name="locality"></p>
				  <p><input placeholder="Building(Optional)" oninput="this.className= ''" name="building"></p>
				</div>
				<!--3st page-->
				<div class="tab"><h3>Transation Type </h3>
				  <div class="radio">
					  <label><input type="radio" name="Ttype" value="newbooking">Newbooking </label>
					</div>
					<div class="radio disabled">
					  <label><input type="radio" name="Ttype"value="resale" >Resale</label>
					</div>
				</div>
				<!--4st page-->

				<div class="tab"><h3>Construction Status</h3>
				  <div class="radio">
					  <label><input type="radio" name="Cstatus" value="redytomove">Ready To Move </label>
					</div>
					<div class="radio">
					  <label><input type="radio" name="Cstatus" value="underconst.">Under Construction</label>
					</div>
					<div class="select">
					<p>Bedroom</p>
					<select name="bedroom">
					  <option name="1" value="1">1</option>
					  <option name="2" value="2">2</option>
					  <option name="3" value="3">3</option>
					  <option name="4" value="4">4</option>
					 </select>
					<p>Bathroom</p>
					<select name="bathroom">
					  <option name="1" value="1">1</option>
					  <option name="2" value="2">2</option>
					  <option name="3" value="3">3</option>
					  <option name="4" value="4">4</option>
					 </select></div>
					
				</div>
				<!--5st page-->
				<div class="tab"><h3>Furnish Type</h3>
				<div class="radio">
					  <label><input type="radio" name="Ftype" value="ffurnished">Fully Furnished</label>
					</div>
					<div class="radio ">
					  <label><input type="radio" name="Ftype" value="sfurnished">Semi Furnished</label>
					</div><div class="radio ">
					  <label><input type="radio" name="Ftype" value="unfurnished">Unfurnished</label>
					</div>
				  <p><input placeholder="Buit Up Area... sq. ft." oninput="this.className = ''" name="builtup"></p>
				  <p><input placeholder="Age of property" oninput="this.className = ''" name="age"></p>
				</div>
				<!--6st page-->
				<div class="tab"><h3>Commercials For Property</h3>
				  <p><input placeholder="Cost" oninput="this.className = ''" name="cost"></p>
				  <p><input placeholder="Maintenence" oninput="this.className = ''" name="maintenence"></p>
				</div>
				<!--7st page-->
				
					<div class="tab"><h3>Add Property Photos</h3>
					  <p><input type="file" name="img"  ></p>
					</div>
				
				<div style="overflow:auto;">
				  <div style="float:right;">
					<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
					<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
				  </div>
				</div>

				<!-- Circles which indicates the steps of the form: -->
				<div style="text-align:center;margin-top:40px;">
				  <span class="step"></span>
				  <span class="step"></span>
				  <span class="step"></span>
				  <span class="step"></span>
				  <span class="step"></span>
				  <span class="step"></span>
				  <span class="step"></span>
				  <span class="step"></span>
				</div>

			</form> 
	</div>
	</div>
	<?php
		/*$query = "SELECT * FROM registration"; 
		$result = mysqli_query($con,$query);*/
	?>

	<!--<table id="example2" class="table table-bordered table-hover">
		<tr>
                  <th>Username</th>
                  <th>email</th>
                  <th>password</th>
                  <th>conpass</th>
                  <th>category</th>
				  <th>Action<th>
				 
         </tr>-->
		 <?php
		/* while($row = mysqli_fetch_array($result))
		 { 
?>
		  <tr>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['conpass'] ;?></td>
                <td><?php echo $row['category'] ;?></td>
				<td><a href="../submit_property"><button name="add" ><p>Edit</p></button></a></td>		
				<td><a href="#"><button name="add" ><p>Delete</p></button></a></td>
				<!--<td><input type="checkbox" name="status" value="1"></td>-->
				<?php
				    if (isset($_POST['status'])) {
		$update ="UPDATE registration SET isactive='".$_POST['status']."' WHERE ID='$id'";
		 mysqli_query($update);	*/
    
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
   <center>   <strong>Copyright &copy; 2019 All rights reserved. Design & Developed By <a href="https://vsystechnologies.com/" target="_blank">VSYS Technology</a>.</strong> </center>
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
<script>
 
 var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}
</script>

<!--image-->
<script type="text/javascript">
   function readURL(input) 
   {
    if (input.files && input.files[0])
		{
        var reader = new FileReader();
                                                
			reader.onload = function (e)
			{
				$('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
}
        $("#profile-img").change(function(){
         readURL(this);
        });
	</script>

</body>
</html>
