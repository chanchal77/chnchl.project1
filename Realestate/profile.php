
<body>
<?php include 'header.php'; ?>


<?php 


$id= $_GET['id'];
$con = mysqli_connect('localhost','root','','demo6');
$userprofile = $_SESSION['username'];
$query = "SELECT * FROM registration  WHERE username = '$userprofile'";
$data = mysqli_query($con,$query);
$result = mysqli_fetch_assoc($data);



?>


<!--Loader-->
<div class="loader">
  <div class="span">
    <div class="location_indicator"></div>
  </div>
</div>
 <!--Loader--> 






<!-- Page Banner Start-->
<!--<section class="page-banner padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="text-uppercase">Profile</h1>
        <p>Serving you since 1999. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
        <ol class="breadcrumb text-center">
          <li><a href="#">Home</a></li>
          <li><a href="#">Pages</a></li>
          <li class="active">Profile</li>
        </ol>
      </div>
    </div>
  </div>
</section>-->
<!-- Page Banner End -->




<!-- Profile Start -->
<section id="agent-2-peperty" class="profile padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="f-p-links margin_bottom">
          <li><a href="profile.php" class="active"><i class="icon-icons230"></i>Profile</a></li>
          <li><a href="my_properties.php"><i class="icon-icons215"></i> My Properties</a></li>
          <li><a href="submit_property.php?username=<?php echo $result['username']; ?>"><i class="icon-icons215"></i> Submit Property</a></li>
          <li><a href="favorite_properties.php"></i> Send Feedback</a></li>
		  <li><a href="message.php">Messeges</a></li>
		  <li><a href="enquiry_Report.php"></i>Report</a></li>
          <li><a href="logout.php"><i class="icon-lock-open3"></i>Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container-3">
    <div class="row">
      <div class="col-md-4 col-sm-6 col-xs-12">
        <h2 class="text-uppercase bottom30">my profile</h2>
        <div class="agent-p-img">
          <img src='<?php echo $result['regi_image'] ?>' class="img-responsive" alt="image"/>
          <input type ="file" class="top10 bottom20" name="image"/><a href="profiledb.php" class="top10 bottom20">Update Profile Picture</a>
          
        </div>
      </div>
      <div class="col-md-8">
        <div class="profile-form">
          <div class="row">
            <form class="callus" action="email.php">
              <div class="col-sm-4">
                <div class="single-query">
                  <label>Your Name:</label>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="single-query form-group">
                  <input type="text" placeholder="Bohdan Kononets" class="keyword-input" name="name">
                </div>
              </div>
              <div class="col-sm-4">
                
              </div>
              <div class="col-sm-8">
                
              </div>
              <div class="col-sm-4">
                <div class="single-query">
                  <label>Mobile:</label>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="single-query form-group">
                  <input type="text" placeholder="(+033) 34 56 7890" class="keyword-input"  name="mobile">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="single-query">
                  <label>Email Adress:</label>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="single-query form-group">
                  <input type="text" placeholder="bohdan@realtyhomes.com" class="keyword-input"  name="email">
                </div>
              </div>
              <div class="col-sm-4">
                
              </div>
              <div class="col-sm-8">
                
              </div>
              <div class="col-sm-4">
                <div class="single-query">
                  <label>Messege:</label>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="single-query form-group">
                  <textarea placeholder="Write here somthing about yours" class="form-control"  name="msg"></textarea>
                </div>
              </div>
             <div class="col-md-12 col-sm-12 col-xs-12 text-right">
              <a class="btn-blue border_radius" href="profiledb.php">Save Changes</a>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-sm-6 col-xs-12 profile-form margin40">
        <h3 class="bottom30 margin40">My Social Network</h3>
        <div class="row">
          <form class="callus">
            <div class="col-sm-4">
              <div class="single-query">
                <label>Facebook:</label>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="single-query form-group">
                <input type="text" placeholder="http://facebook.com" class="keyword-input">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="single-query">
                <label>Twitter:</label>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="single-query form-group">
                <input type="text" placeholder="http://twitter.com" class="keyword-input">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="single-query">
                <label>Google Plus:</label>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="single-query form-group">
                <input type="text" placeholder="http://google-plus.com" class="keyword-input">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="single-query">
                <label>Linkedin:</label>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="single-query form-group">
                <input type="text" placeholder="http://linkedin.com" class="keyword-input">
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 text-right">
              <a class="btn-blue border_radius" href="#.">Save Changes</a>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-2 hidden-xs"></div>
      <div class="col-md-5 col-sm-6 col-xs-12 profile-form margin40">
        <h3 class=" bottom30 margin40">Change Your Password</h3>
        <div class="row">
          <form class="callus">
            <div class="col-sm-4">
              <div class="single-query">
                <label>Current Password:</label>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="single-query form-group">
                <input type="password" class="keyword-input">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="single-query">
                <label>New Password:</label>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="single-query form-group">
                <input type="password" class="keyword-input">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="single-query">
                <label>Confirm Password:</label>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="single-query form-group">
                <input type="password" class="keyword-input">
              </div>
            </div>
            <div class="col-sm-12 text-right">
              <a class="btn-blue border_radius" href="#.">Save Changes</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Profile end -->



<?php include'footer.php';?>
</body>
</html>
