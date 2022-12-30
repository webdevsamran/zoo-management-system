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
	<div id="wrapper">

		<!-- start header -->
		<?php include('includes/header.php');?>
		<!-- end header -->
		<section id="inner-headline">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2 class="pageTitle">Animal Details</h2>
					</div>
				</div>
			</div>
		</section>
		<section id="content">
			<section class="section-padding">
				<div class="container">
					<?php 
					$anid=$_GET['anid'];
					$query=mysqli_query($con,"select * from tblanimal where ID='$anid'");
					while ($row=mysqli_fetch_array($query)) {
						?>
						<div class="row showcase-section">
							<div class="col-md-6">
								<img src="images/<?php echo $row['AnimalImage'];?>" alt="showcase image">
							</div>
							<div class="col-md-6">
								<div class="about-text">
									<h3><?php echo $row['AnimalName'];?>(<?php echo $row['Breed'];?>)</h3>
									<P><strong>Cage Number: <?php echo $row['CageNumber'];?></strong></P>
									<P><strong>Breed: <?php echo $row['Breed'];?></strong></P> 
									<p><?php echo $row['Description'];?></p>
								</div>
							</div>
						</div>
						<?php 
					}?>
				</div>
			</section> 
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