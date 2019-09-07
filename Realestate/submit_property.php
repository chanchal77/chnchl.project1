<html>
<head>
<style>
.col-md-8 {
    width: 66.66666667%;
    margin-top: -20px;
}
/*form design*/
h3 {
    font-size: 24px;
    border-bottom: double;
}

#regForm {
  background-color: whitesmoke;
  margin: 100px auto;
  padding: 40px;
  width: 100%;
  min-width: 300px;
  margin-top: 0px;
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
  padding: 5px;
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

</style>
</head>
<?php include 'header.php'; ?>
<body>

<?php
session_start();
$con = mysqli_connect('localhost','root','','demo6');
$userprofile = $_SESSION['username'];
$query = "SELECT * FROM registration  WHERE username = '$userprofile'";
$data = mysqli_query($con,$query);
$result = mysqli_fetch_assoc($data);


$username= $_GET['username'];


?>


<!--Loader-->
<div class="loader">
  <div class="span">
    <div class="location_indicator"></div>
  </div>
</div>
 <!--Loader-->               
     

          

<!-- Page Banner Start-->
<section class="page-banner padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="text-uppercase">Favorite properties</h1>
        <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
        <ol class="breadcrumb text-center">
          <li><a href="#">Home</a></li>
          <li><a href="#">Pages</a></li>
          <li class="active">My properties</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<!-- Page Banner End -->



<!-- My Properties  -->
<section id="property" class="padding listing1">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <ul class="f-p-links margin_bottom">
          <li><a href="profile.php" ><i class="icon-icons230"></i>Profile</a></li>
          <li><a href="my_properties.php" ><i class="icon-icons215"></i> My Properties</a></li>
          <li><a href="submit_property.php?username=<?php echo $result['username']; ?>" class="active"><i class="icon-icons215"></i> Submit Property</a></li>
          <li><a href="favorite_properties.php" >Send Feedback</a></li>
		  <li><a href="message.php"><i class="icon-lock-open3"></i>Messeges</a></li>
		  <li><a href="enquiry_Report.php"></i>Report</a></li>
          <li><a href="logout.php"><i class="icon-lock-open3"></i>Logout</a></li>
        </ul>
      </div>
    </div>
    <div class="row">
      <?php if($username = $_GET['username']==true) 
			{  
	  ?>
      <div class="col-sm-1 col-md-2"></div>
      <div class="col-sm-10 col-md-8">
      <h2 class="text-uppercase bottom40">Add Your Property</h2>
	  
	  
     <form action="addpropertydb.php" enctype="multipart/form-data" method="post" id="regForm" > 
			
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
					  <option name="Admin" value="Admin">Owner</option>
					  <option name="Agent" value="Agent">Agent</option>
					  <option name="Builder" value="Builder">Builder</option>
					 </select>
					
					 </div>
					  <input type="text" name="nameby" placeholder="Enter Your Name" />
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
				  <p><input placeholder="Building" oninput="this.className= ''" name="building"></p>
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
					  <p><input type="file"  name="img"  placeholder="Upload your cover photo"></p>
					  <p><input type="file"  name="img1"  placeholder="Upload your 1st photo"></p>
					  <p><input type="file"  name="img2"  placeholder="Upload your 2st photo"></p>
					  <p><input type="file" name="img3"  placeholder="Upload your 3st photo"></p>
					  <p><input type="file"  name="img4"  placeholder="Upload your 4st photo"></p>
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
			<?php  session_start();
session_unset();
} ?> 
      </div>
      <div class="col-sm-1 col-md-2"></div>
      
      
      
      <div class="col-sm-4">
      
     
   
      
      
      </div>
      
    </div>
    
  </div>
</section>
<!-- My Properties End -->



<?php include 'footer.php'; ?>
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

</body>
</html>

