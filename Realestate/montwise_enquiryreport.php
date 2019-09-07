<?php include 'header.php'; ?>
<body>
<?php


include 'config.php';

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



<!-- My - Property Start -->
<section id="agent-2-peperty" class="my-pro padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="f-p-links margin_bottom">
          <li><a href="profile.php"><i class="icon-icons230"></i>Profile</a></li>
          <li><a href="my_properties.php" class="active"><i class="icon-icons215"></i> My Properties</a></li>
          <li><a href="submit_property.php?username=<?php echo $result['username']; ?>"><i class="icon-icons215"></i> Submit Property</a></li>
          <li><a href="favorite_properties.php"><i class="icon-icons43"></i> Favorite Properties</a></li>
          <li><a href="login.html"><i class="icon-lock-open3"></i>Logout</a></li>
        </ul>
      </div>
    </div>
    <div class="row bottom30">
      <div class="col-md-12 text-center">
        <h2 class="text-uppercase">My Properties</h2>
      </div>
    </div>
  </div>
  
  <?php
  session_start();
		$id=$_GET['id'];
		
		$con = mysqli_connect('localhost','root','','demo6');
		$Name= $_SESSION['username'];

		$from= 
		$to
		$query = "SELECT * FROM contact where date between '2019-04-01' and '2019-04-30'"; 
		$result = mysqli_query($con,$query);
	?>
  <table id="example2" class="table table-bordered  ">
		<tr>
                  
				 
				  
				  <th>FullName</th>
				  <th>Number</th>
				  <th>email</th>
				  <th>messages</th>
				  <th>Contact for</th>
				  <th>city</th>
				  <th>date</th>
				  
				  
				  
         </tr>
		 <?php
		 while($row = mysqli_fetch_array($result))
		 { 
?>
		  <tr>
				
				
				
				<td><?php echo $row['FullName']; ?></td>
				<td><?php echo $row['Number']; ?></td>
				<td><?php echo $row['Email']; ?></td>
				<td><?php echo $row['Msg']; ?></td>
				<td><?php echo $row['contactto']; ?></td>
				<td><?php echo $row['city']; ?></td>
				<td><?php echo $row['date']; ?></td>
				
				
				<?php
		 }
				?>
            </tr>
	  
     </table>
 
 <!-- <div class="container  list-t-border">
    <div class="row bg-hover">
      <div class="my-pro-list">
	  	 
	
        <div class="col-md-2 col-sm-2 col-xs-12">
          <img src='<?php echo $result['image'] ?>' alt="image"/>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="feature-p-text">
            <h4><?php echo $result['protype']; ?></h4>
            <p><?php echo $result['locality']; ?><?php echo $result['city']; ?></p>
            <span><b>Status:</b><?php echo $result['type']; ?></span><br>
            <div class="button-my-pro-list">
              <a href="#.">Rs.<?php echo $result['cost']; ?></a>
            </div>
          </div>
        </div>
	
        <div class="col-md-2 col-sm-2 col-xs-12">
          <div class="select-pro-list">
            <a href="submit_property.php"><i class="icon-pen2"></i></a>
            <a href="#"><i class="icon-cross"></i></a>
          </div>
        </div>
      </div>
    </div>-->
	
	
   <!-- <div class="row bg-hover bg-color-gray">
      <div class="my-pro-list">
        <div class="col-md-2 col-sm-2 col-xs-12">
          <img src='<?php echo $result['image'] ?>' alt="image"/>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="feature-p-text">
            <h4><?php echo $result['protype']; ?></h4>
            <p><?php echo $result['locality']; ?><?php echo $result['city']; ?></p>
            <span><b>Status:</b> <?php echo $result['type']; ?></span><br>
            <div class="button-my-pro-list">
              <a href="#.">Rs.<?php echo $result['cost']; ?></a>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-12">
          <div class="select-pro-list">
            <a href="submit_property.php"><i class="icon-pen2"></i></a>
            <a href="#"><i class="icon-cross"></i></a>
          </div>
        </div>
      </div>
    </div>-->
   <!-- <div class="row bg-hover">
      <div class="my-pro-list">
        <div class="col-md-2 col-sm-2 col-xs-12">
          <img src="images/my-p-list.png" alt="image"/>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="feature-p-text">
            <h4>Historic Town House</h4>
            <p>Action Area I, Newtown, New Town, West Bengal, India</p>
            <span><b>Status:</b>  For Sale</span><br>
            <div class="button-my-pro-list">
              <a href="#.">$128,600</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-12">
          <div class="select-pro-list">
            <a href="submit_property.php"><i class="icon-pen2"></i></a>
            <a href="#"><i class="icon-cross"></i></a>
          </div>
        </div>
      </div>
    </div>-->
    <!--<div class="row bg-hover bg-color-gray">
      <div class="my-pro-list">
        <div class="col-md-2 col-sm-2 col-xs-12">
          <img src="images/my-p-list.png" alt="image"/>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="feature-p-text">
            <h4>Historic Town House</h4>
            <p>Action Area I, Newtown, New Town, West Bengal, India</p>
            <span><b>Status:</b>  For Sale</span><br>
            <div class="button-my-pro-list">
              <a href="#.">$128,600</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-12">
          <div class="select-pro-list">
            <a href="#"><i class="icon-pen2"></i></a>
            <a href="#"><i class="icon-cross"></i></a>
          </div>
        </div>
      </div>
    </div>-->
   <!-- <div class="row bg-hover">
      <div class="my-pro-list">
        <div class="col-md-2 col-sm-2 col-xs-12">
          <img src="images/my-p-list.png" alt="image"/>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="feature-p-text">
            <h4>Historic Town House</h4>
            <p>Action Area I, Newtown, New Town, West Bengal, India</p>
            <span><b>Status:</b>  For Sale</span><br>
            <div class="button-my-pro-list">
              <a href="#.">$128,600</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-12">
          <div class="select-pro-list">
            <a href="#"><i class="icon-pen2"></i></a>
            <a href="#"><i class="icon-cross"></i></a>
          </div>
        </div>
      </div>
    </div>-->
    <!--<div class="row bg-hover bg-color-gray">
      <div class="my-pro-list">
        <div class="col-md-2 col-sm-2 col-xs-12">
          <img src="images/my-p-list.png" alt="image"/>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="feature-p-text">
            <h4>Historic Town House</h4>
            <p>Action Area I, Newtown, New Town, West Bengal, India</p>
            <span><b>Status:</b>  For Sale</span><br>
            <div class="button-my-pro-list">
              <a href="#.">$128,600</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-12">
          <div class="select-pro-list">
            <a href="#"><i class="icon-pen2"></i></a>
            <a href="#"><i class="icon-cross"></i></a>
          </div>
        </div>
      </div>
    </div>-->
   <!-- <div class="row bg-hover">
      <div class="my-pro-list">
        <div class="col-md-2 col-sm-2 col-xs-12">
          <img src="images/my-p-list.png" alt="image"/>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="feature-p-text">
            <h4>Historic Town House</h4>
            <p>Action Area I, Newtown, New Town, West Bengal, India</p>
            <span><b>Status:</b>  For Sale</span><br>
            <div class="button-my-pro-list">
              <a href="#.">$128,600</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-12">
          <div class="select-pro-list">
            <a href="#"><i class="icon-pen2"></i></a>
            <a href="#"><i class="icon-cross"></i></a>
          </div>
        </div>
      </div>
    </div>-->
    <!--<div class="row bg-hover bg-color-gray">
      <div class="my-pro-list">
        <div class="col-md-2 col-sm-2 col-xs-12">
          <img src="images/my-p-list.png" alt="image"/>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="feature-p-text">
            <h4>Historic Town House</h4>
            <p>Action Area I, Newtown, New Town, West Bengal, India</p>
            <span><b>Status:</b>  For Sale</span><br>
            <div class="button-my-pro-list">
              <a href="#.">$128,600</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-12">
          <div class="select-pro-list">
            <a href="#"><i class="icon-pen2"></i></a>
            <a href="#"><i class="icon-cross"></i></a>
          </div>
        </div>
      </div>
    </div>-->
  </div>
  <div class="container">
    <div class="row padding_top">
      <div class="col-md-12">
        <ul class="pager">
          <li><a href="#">1</a></li>
          <li class="active"><a href="#">2</a></li>
          <li><a href="#">3</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- My - Property end -->

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
          <li class="active">Favorite properties</li>
        </ol>
      </div>
    </div>
  </div>
</section>
<!-- Page Banner End -->

<?php include'footer.php';?>
</body>
</html>
