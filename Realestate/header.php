<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>Real Estate| Property Detail</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/reality-icon.css">
<link rel="stylesheet" type="text/css" href="css/bootsnav.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="css/settings.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/range-Slider.min.css">
<link rel="stylesheet" type="text/css" href="css/search.css">
<link rel="icon" href="images/myhouse.jpg">
<style>
li {
    color: darkblue;
}
</style>
</head>
<body>


<!--Loader-->
<div class="loader">
  <div class="span">
    <div class="location_indicator"></div>
  </div>
</div>
 <!--Loader--> 
 
 

<!--Header-->
<header class="layout_default">
  <div class="topbar grey">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <p>We are Best in Town With 40 years of Experience.</p>
        </div>
        <div class="col-md-7 text-right">
          <ul class="breadcrumb_top text-right">
			  <li><a href="favorite_properties.php"><i class="icon-icons43"></i>Send Feedback</a></li>
			  <li><a href="submit_property.php"><i class="icon-icons215"></i>Submit Property</a></li>
			  <li><a href="my_properties.php"><i class="icon-icons215"></i>My Property</a></li>
			  <li><a href="profile.php"><i class="icon-icons230"></i>Profile</a></li>
			  <li><a href="login.html"><i class="icon-icons179"></i>Login / Register</a></li>
			  <li><?php 
					session_start();
					echo "Welcome"." ".$_SESSION['username'];
					
					?>
			</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="header-upper">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-12">
          <div class="logo"><a href="index.php"><img alt="" src="images/myhouse.jpg" width="100px" height="50px"></a></div>
        </div>
        <!--Info Box-->
        <div class="col-md-9 col-sm-12 right">
          <div class="info-box first">
            <div class="icons"><i class="icon-telephone114"></i></div>
            <ul>
              <li><strong>Phone Number</strong></li>
              <li>+1 900 234 567 - 68</li>
            </ul>
          </div>
          <div class="info-box">
            <div class="icons"><i class="icon-icons74"></i></div>
            <ul>
              <li><strong>Manhattan Hall,</strong></li>
              <li>Sbook,Maharashtra India</li>
            </ul>
          </div>
          <div class="info-box">
            <div class="icons"><i class="icon-icons142"></i></div>
            <ul>
              <li><strong>Email Address</strong></li>
              <li><a href="javascript:void(0)">info@sbook.com</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-default navbar-sticky bootsnav">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="attr-nav">
            <ul class="social_share clearfix">
              <li><a href="javascript:void(0)" class="facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="javascript:void(0)" class="twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a class="google" href="javascript:void(0)"><i class="icon-google4"></i></a></li>
            </ul>
          </div>
          <!-- Start Header Navigation -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
            <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand sticky_logo" href="index.php"><img src="images/logowhite.jpg" class="logo" alt=""></a>
          </div> <!-- End Header Navigation -->
          <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav" data-in="fadeIn" data-out="fadeOut">
              <li class="dropdown">
                <a href="index.php" >Home </a>
               <!-- <ul class="dropdown-menu">
                  <li><a href="index.html">Home Style 1</a></li>
                  <li><a href="index2.html">Home Style 2</a></li>
                  <li><a href="index3.html">Home Style 3</a></li>
                  <li><a href="index4.html">Home Style 4</a></li>
                  <li> <a href="index5.html">Home Style 5</a></li>
                  <li> <a href="index6.html">Home Style 6</a></li>
                  <li> <a href="index7.html">Home Style 7</a></li>
                  <li> <a href="index8.html">Home Style 8</a></li>
                  <li> <a href="index9.html">Home Style 9</a></li>
                  <li> <a href="fullscreen.html">Home Fullscreen<span>new</span></a></li>
                </ul>-->
              </li>
             <!-- <li class="dropdown megamenu-fw">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Listing</a>
                <ul class="dropdown-menu megamenu-content" role="menu">
                  <li>
                    <div class="row">
                      <div class="col-menu col-md-3">
                        <h5 class="title">PROPERTIES LIST</h5>
                        <div class="content">
                          <ul class="menu-col">
                            <li><a href="listing1.html">Properties List</a></li>
                            <li><a href="index7.html">Single Property</a></li>
                            <li><a href="listing2.html">Search by City</a></li>
                            <li><a href="listing5.html">Search by Category</a></li>
                            <li><a href="listing3.html">Search by Type</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-menu col-md-9">
                        <h5 class="title bottom20">PROPERTIES LIST</h5>
                        <div class="row">
                          <div id="nav_slider" class="owl-carousel">
                            <div class="item">
                              <div class="image bottom15"> 
                                <img src="images/nav-slider1.jpg" alt="Featured Property"> 
                                <span class="nav_tag yellow text-uppercase">for rent</span>
                              </div>
                              <h4><a href="property_detail1.html">Park Avenue Apartment</a></h4>
                              <p>Towson London, MR 21501</p>
                            </div>
                            <div class="item">
                              <div class="image bottom15"> 
                                <img src="images/nav-slider2.jpg" alt="Featured Property"> 
                                <span class="nav_tag yellow text-uppercase">for rent</span>
                              </div>
                              <h4><a href="property_detail2.html">Park Avenue Apartment</a></h4>
                              <p>Towson London, MR 21501</p>
                            </div>
                            <div class="item">
                              <div class="image bottom15"> 
                                <img src="images/nav-slider3.jpg" alt="Featured Property"> 
                                <span class="nav_tag yellow text-uppercase">for rent</span>
                              </div>
                              <h4><a href="property_detail3.html">Park Avenue Apartment</a></h4>
                              <p>Towson London, MR 21501</p>
                            </div>
                            <div class="item">
                              <div class="image bottom15"> 
                                <img src="images/nav-slider1.jpg" alt="Featured Property"> 
                                <span class="nav_tag yellow text-uppercase">for rent</span>
                              </div>
                              <h4><a href="property_detail1.html">Park Avenue Apartment</a></h4>
                              <p>Towson London, MR 21501</p>
                            </div>
                            <div class="item">
                              <div class="image bottom15"> 
                                <img src="images/nav-slider2.jpg" alt="Featured Property"> 
                                <span class="nav_tag yellow text-uppercase">for rent</span>
                              </div>
                              <h4><a href="property_detail2.html">Park Avenue Apartment</a></h4>
                              <p>Towson London, MR 21501</p>
                            </div>
                            <div class="item">
                              <div class="image bottom15"> 
                                <img src="images/nav-slider3.jpg" alt="Featured Property"> 
                                <span class="nav_tag yellow text-uppercase">for rent</span>
                              </div>
                              <h4><a href="property_detail3.html">Park Avenue Apartment</a></h4>
                              <p>Towson London, MR 21501</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>-->
              <li class="dropdown megamenu-fw active">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Properties</a>
                <ul class="dropdown-menu megamenu-content bg" role="menu">
                  <li>
                    <div class="row">
                      <div class="col-menu col-md-3">
                        <h5 class="title">Recent Project</h5>
                        <div class="content">
                          <ul class="menu-col">
                            <li><a href="#">Project in Hydrabad</a></li>
                            <li><a href="#">Project in Faridabad</a></li>
                            <li><a href="#">Project in Bengluru</a></li>
                            <li><a href="#">Project in Pune</a></li>
                            <li><a href="#">Project in Mumbai</a></li>
							<li><a href="#">Project in Delhi</a></li>
							<li><a href="#">Project in Gurgaon</a></li>
							<li><a href="#">Project in Ahemdabad</a></li>
							<li><a href="#">Project in Kolkata</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-menu col-md-3">
                        <h5 class="title">Rent/Sell Your Property</h5>
                        <div class="content">
                          <ul class="menu-col">
                            <li><a href="#">I'm Agent</a></li>
                            <li><a href="#">I'm Devloper</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-menu col-md-3">
                        <h5 class="title">Property Agents</h5>
                        <div class="content">
                          <ul class="menu-col">
                            <li><a href="#">Property Detail 1</a></li>
                            <li><a href="#">Property Detail 2</a></li>
                            <li><a href="#">Property Detail 3</a></li>
                            <li><a href="#">Single Property</a></li>
                            <li><a href="#">Search by Type</a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-menu col-md-3">
                        <h5 class="title">Collection</h5>
                        <div class="content">
                          <ul class="menu-col">
                            <li><a href="#">Rent Houses</a></li>
                            <li><a href="#">Rent Flats</a></li>
                            <li><a href="#">Batchelor flats</a></li>
                          
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#." class="dropdown-toggle" data-toggle="dropdown">Features </a>
                <ul class="dropdown-menu">
                  <li class="dropdown">
                    <a href="#." class="dropdown-toggle" data-toggle="dropdown">News</a>
                    <ul class="dropdown-menu">
                      <li><a href="listing6.html">Godrej Property Ltd.</a></li>
                            <li><a href="#">Tata housing</a></li>
                            <li><a href="#">Amrapali Group</a></li>
                            <li><a href="#">Manju foundation builder</a></li>
                            <li><a href="#">Puravankara Limited</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#." class="dropdown-toggle" data-toggle="dropdown">Property Agents</a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Agent Style1</a></li>
                      <li><a href="#">Agent Style2</a></li>
                      <li><a href="#">Agent Style3</a></li>
                      <li><a href="#">Agent Style4</a></li>
                      <li><a href="#">Agent Style5</a></li>
                    </ul>
                  </li>
                 <!-- <li class="dropdown">
                    <a href="#." class="dropdown-toggle" data-toggle="dropdown">Agetn Profile Styles</a>
                    <ul class="dropdown-menu">
                      <li><a href="agent_profile.html">Agent Profile 1</a></li>
                      <li><a href="agent_profile2.html">Agent Profile 2</a></li>
                    </ul>
                  </li>-->
                  <li class="dropdown">
                  <a href="#." class="dropdown-toggle" data-toggle="dropdown">Testimonials</a>
                  <ul class="dropdown-menu">
                      <li><a href="#">Style 1</a></li>
                      <li><a href="#">Style 2</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                  <a href="#." class="dropdown-toggle" data-toggle="dropdown">FAQ's</a>
                  <ul class="dropdown-menu">
                      <li><a href="#">Style 1</a></li>
                      <li><a href="#">Style 2</a></li>
                    </ul>
                  </li>
                  <li><a href="favorite_properties.html">Favorite Properties</a></li>
                  <li class="dropdown">
                  <a href="#." class="dropdown-toggle" data-toggle="dropdown">404 Error</a>
                  <ul class="dropdown-menu">
                      <li><a href="#">404 Error 1</a></li>
                      <li><a href="#">404 Error 2</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
			  <li class="dropdown">
                <a href="#." class="dropdown-toggle" data-toggle="dropdown">Top Devlopers In City</a>
                <ul class="dropdown-menu">
                  <li class="dropdown">
                    <a href="#." class="dropdown-toggle" data-toggle="dropdown">Pune</a>
                    <ul class="dropdown-menu">
                      <li><a href="listing6.html">Godrej Property Ltd.</a></li>
                            <li><a href="#">Tata housing</a></li>
                            <li><a href="#">Amrapali Group</a></li>
                            <li><a href="#">Manju foundation builder</a></li>
                            <li><a href="#">Puravankara Limited</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#." class="dropdown-toggle" data-toggle="dropdown">Mumbai</a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Agent Style1</a></li>
                      <li><a href="#">Agent Style2</a></li>
                      <li><a href="#">Agent Style3</a></li>
                      <li><a href="#">Agent Style4</a></li>
                      <li><a href="#">Agent Style5</a></li>
                    </ul>
                  </li>
                 <!-- <li class="dropdown">
                    <a href="#." class="dropdown-toggle" data-toggle="dropdown">Agetn Profile Styles</a>
                    <ul class="dropdown-menu">
                      <li><a href="agent_profile.html">Agent Profile 1</a></li>
                      <li><a href="agent_profile2.html">Agent Profile 2</a></li>
                    </ul>
                  </li>-->
                  <li class="dropdown">
                  <a href="#." class="dropdown-toggle" data-toggle="dropdown">Nashik</a>
                  <ul class="dropdown-menu">
                      <li><a href="#">Style 1</a></li>
                      <li><a href="#">Style 2</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                  <a href="#." class="dropdown-toggle" data-toggle="dropdown">Hydrabad</a>
                  <ul class="dropdown-menu">
                      <li><a href="#">Style 1</a></li>
                      <li><a href="#">Style 2</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                  <a href="#." class="dropdown-toggle" data-toggle="dropdown">Kolkata</a>
                  <ul class="dropdown-menu">
                      <li><a href="#">404 Error 1</a></li>
                      <li><a href="#">404 Error 2</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                  <a href="#." class="dropdown-toggle" data-toggle="dropdown">Ahemdabad</a>
                  <ul class="dropdown-menu">
                      <li><a href="#">404 Error 1</a></li>
                      <li><a href="#">404 Error 2</a></li>
                    </ul>
                  </li>
				  <li class="dropdown">
                  <a href="#." class="dropdown-toggle" data-toggle="dropdown">Chennai</a>
                  <ul class="dropdown-menu">
                      <li><a href="#">404 Error 1</a></li>
                      <li><a href="#">404 Error 2</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="contact.html">Contact Us</a></li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>
<!--Header Ends-->


<script src="js/jquery-2.1.4.js"></script>
<script src="js/bootstrap.min.js"></script> 
<script src="js/bootsnav.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/jquery-countTo.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/range-Slider.min.js"></script>
<script src="js/owl.carousel.min.js"></script> 
<script src="js/jquery.cubeportfolio.min.js"></script>
<script src="js/selectbox-0.2.min.js"></script>
<script src="js/zelect.js"></script>
<script src="js/jquery.themepunch.tools.min.js"></script>
<script src="js/jquery.themepunch.revolution.min.js"></script>
<script src="js/revolution.extension.layeranimation.min.js"></script>
<script src="js/revolution.extension.navigation.min.js"></script>
<script src="js/revolution.extension.parallax.min.js"></script>
<script src="js/revolution.extension.slideanims.min.js"></script>
<script src="js/revolution.extension.video.min.js"></script>
<script src="js/neary-by-place.js"></script> 
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAOBKD6V47-g_3opmidcmFapb3kSNAR70U&libraries=places"></script> 
<script src="js/google-map.js"></script> 
<script src="js/jquery.fancybox.js"></script>
<script src="js/custom.js"></script>
<script src="js/functions.js"></script>
</body>
</html>


