<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>Castle | Favorite</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/reality-icon.css">
<link rel="stylesheet" type="text/css" href="css/bootsnav.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="css/settings.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/range-Slider.min.css">
<link rel="stylesheet" type="text/css" href="css/search.css">
<link rel="icon" href="images/icon.png">
<style>
.form-control {
    margin-top: 12px;
}
</style>


</head>
<body>
<?php include 'header.php';?>


<!--Loader-->
<div class="loader">
  <div class="span">
    <div class="location_indicator"></div>
  </div>
</div>
 <!--Loader--> 

<!-- My - Property Start -->
<section id="agent-2-peperty" class="my-pro padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="f-p-links margin_bottom">
          <li><a href="profile.php" ><i class="icon-icons230"></i>Profile</a></li>
          <li><a href="my_properties.php" ><i class="icon-icons215"></i> My Properties</a></li>
          <li><a href="submit_property.php?username=<?php echo $result['username']; ?>"><i class="icon-icons215"></i> Submit Property</a></li>
          <li><a href="favorite_properties.php" class="active"><i class="icon-icons215"></i> Send Feedback</a></li>
		  <li><a href="message.php"><i class="icon-lock-open3"></i>Messeges</a></li>
		  <li><a href="enquiry_Report.php"></i>Report</a></li>
          <li><a href="logout.php"><i class="icon-lock-open3"></i>Logout</a></li>
        </ul>
      </div>
    
<!-- My - Property End -->

<div class="agent-p-form">
                	<div class="our-agent-box bottom30">
                        <h2>Send us Feedback</h2>
                    </div>
                    
                    <div class="row">
                      <form  method="post" action="favorite_propertiesdb.php" class="callus">
                        <div class="col-md-6">
                          <div class="single-query form-group">
                            <input type="text" placeholder="Your Name" class="keyword-input" name="name">
                            </div>
                            <div class="single-query form-group">
                            <input type="text" placeholder="Mobile Number" class="keyword-input" name="no">
                          </div>
                           <div class="select">
					
								Who are you: <select name="category">
								  
								 <option name="Admin" value="Admin">Owner</option>
								  <option name="Agent" value="Agent">Agent</option>
								  <option name="Builder" value="Builder">Builder</option>
								 </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							Enter Property ID:
					<input type="text"  placeholder="(for Delete/Update )"name="Pro_id">
						</div>
                         <div class="single-query form-group">
                            <input type="text" placeholder="Reason" class="keyword-input" name="rsn">
                          </div>
                          
						  
                          </div>
						  <!--6 col-->
						  <div class="col-md-6">
                          
                          <div class="single-query form-group">
                            <textarea placeholder="Massege" class="form-control" name="msg"></textarea>
                          </div>
                          <input type="submit" value="submit now" class="btn-blue">
                          </div>
						  
						  
						  
						  
                      </form>
                      
                    </div>
                	
                </div>

				
				
	</div>		
</div>
</section>

<!--Footer-->
<?php include'footer.php';?>
</body>
</html>

