<html>
<head>
<style>
.image {
    height: 250px;
}
</style>
<head>
<body>
<?php include 'header.php'; ?>
<section id="property" class="padding">
  <div class="container">
<div class="row">
      <div class="col-xs-12">
        <h2 class="uppercase" align="center">latest Properties</h2>
        <p class="heading_space" align="center"> We are proud to present to you some of the best homes, apartments, offices e.g. across Australia for affordable 
          prices. 
        </p>
      </div>
    </div>
<?php

	

	$type = $_POST['type'];
	//$Ptype = $_POST['Ptype'];
	$City = $_POST['city'];
	//$Cstatus = $_POST['Cstatus'];
	$Bedroom = $_POST['bedroom'];
	$Bathroom = $_POST['bathroom'];
	$Builtup = $_POST['builtup'];
	$Cost = $_POST['cost'];


	$con = mysqli_connect('localhost','root','','demo6');

	$query = "SELECT * FROM `propertydetails` WHERE TYPE = '$type' OR city = '$City' OR bedroom ='$Bedroom' OR bathroom ='$Bathroom'
			OR builtup ='$Builtup' OR cost ='$Cost'";



	$result= mysqli_query($con,$query);

	if($result==1)
	{
		
					 while($row = mysqli_fetch_assoc($result))
					 { 
				
			?>

				  <div class="col-sm-6">
				  
					<div class="property_item heading_space">
					  <div class="image"> 
						<a href="property_detail3.php?id=<?php echo $row['id']; ?>"><img src='<?php echo $row['image']; ?>'  alt="latest property" class="img-responsive" height="150px" ></a> 
					  </div>
					  <div class="price default_clr clearfix bottom20">
						<span class="tag pull-left">For <?php echo $row['type']; ?></span>
						<h4 class="pull-right"><?php echo $row['cost']; ?> <small><?php echo $row['protype']; ?></small></h4>
					  </div>
					  <div class="proerty_content">
						<div class="proerty_text">
						  <h3 class="bottom15"> <a href="property_detail1.html"><?php echo $row['protype']; ?> <?php echo $row['id']; ?></a></h3>
						  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam power nonummy nibh tempor cum soluta 
							nobis eleifend option congue nihil imperdiet doming…
						  </p>
						</div>
						<div class="favroute clearfix">
						  <p class="pull-md-left"><?php echo $row['locality']; ?>,<?php echo $row['city']; ?></p>
						  <ul class="pull-right">
							<li><a href="javascript:void(0)"><i class="icon-video-player"></i></a></li>
							<li><a href="javascript:void(0)"><i class="icon-like"></i></a></li>
							<li><a href="#one" class="share_expender" data-toggle="collapse"><i class="icon-share3"></i></a></li>
						  </ul>
						</div>
						<div class="toggle_share collapse" id="one">
						  <ul>
							<li><a href="javascript:void(0)" class="facebook"><i class="icon-facebook-1"></i> Facebook</a></li>
							<li><a href="javascript:void(0)" class="twitter"><i class="icon-twitter-1"></i> Twitter</a></li>
							<li><a href="javascript:void(0)" class="vimo"><i class="icon-vimeo3"></i> Vimeo</a></li>
						  </ul>
						</div>
						<div class="property_meta"> <span><i class="icon-select-an-objecto-tool"></i><?php echo $row['builtup']; ?>sq.ft</span> <span><i class="icon-bed"></i><?php echo $row['bedroom']; ?>Bedroom</span> <span><i class="icon-safety-shower"></i><?php echo $row['bathroom']; ?>Bathroom</span><!-- <span><i class="icon-old-television"></i>TV Lounge</span> <span><i class="icon-garage"></i>1 Garage</span> --></div>
					  </div>
					</div>
					 
				  </div>
				 <?php
					 }
				
					?>	
				  </div>
				  </div>
				  </section>
			<?php 	  
	}	
	else
	{
		echo"something went wrong!";
	}
	
	
	?>
	
	
</body>

</html>