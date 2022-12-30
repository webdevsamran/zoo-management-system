<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>zoo website</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<meta name="author" content="http://webthemez.com" />
	<!-- css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
	<link href="css/flexslider.css" rel="stylesheet" /> 
	<link href="css/style.css" rel="stylesheet" />

</head>
<body>
	<div id="wrapper" class="home-page">

		<!-- start header -->
		<?php include('includes/header.php');?>
		<!-- end header -->
		<section id="banner">

			<!-- Slider -->
			<div id="main-slider" class="flexslider">
				<ul class="slides">
					<li>
						<img src="img/slides/banner.jpg" alt="" />
						<div class="flex-caption">
							<h3>Adventure Travel</h3> 
							<p>Since we love a great adventure</p> 

						</div>
					</li>
					<li>
						<img src="img/slides/banner2.jpg" alt="" />
						<div class="flex-caption">
							<h3>Enjoy the Journey</h3> 
							<p>Stop worrying and enjoy the trip</p> 

						</div>
					</li>
				</ul>
			</div>
			<!-- end slider -->

		</section> 
		<section id="call-to-action-2">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-sm-9">
						<h3>Travel makes one modest!!</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus temporibus perferendis nesciunt quam repellendus nulla nemo ipsum odit corrupti</p>
					</div>
					<div class="col-md-2 col-sm-3">
						<a href="#" class="btn btn-primary">Read More</a>
					</div>
				</div>
			</div>
		</section>

		<section id="content">

			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="aligncenter"><h2 class="aligncenter">Our Best Animals</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt..</div>
						<br/>
					</div>
				</div>

				<div class="row box-section">
					<?php 
					$query=mysqli_query($con,"select * from tblanimal order by rand() limit 6");
					while ($row=mysqli_fetch_array($query))
					{
						?>
						<div class="col-md-4 " style="margin-bottom: 30px;">
							<div class="box-content">
								<a href="details.php?anid=<?php echo $row['ID'];?>">
									<img class="" src="admin/images/<?php echo $row['AnimalImage'];?>" width='220' height='200' alt="">   
									<h3><?php echo $row['AnimalName'];?><span class="price pull-right"></span></h3>
									<strong>Breed (<?php echo $row['Breed'];?>)</strong>  
									<p><?php echo substr($row['Description'],0,80);?>....</p>  
								</a>				
							</div>
						</div>
						<?php 
					}?>
				</div>
			</section>
			<?php include('includes/footer.php');?>
		</div>
		<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="js/jquery.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.fancybox-media.js"></script>  
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/animate.js"></script>
	<!-- Vendor Scripts -->
	<script src="js/modernizr.custom.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/animate.js"></script>
	<script src="js/custom.js"></script> 
</body>
</html>