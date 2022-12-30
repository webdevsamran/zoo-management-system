<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>zoo website- Gallery</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="http://webthemez.com" />
  <!-- css -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
  <link href="css/flexslider.css" rel="stylesheet" />
  <!-- Vendor Styles -->
  <link href="css/magnific-popup.css" rel="stylesheet"> 
  <!-- Block Styles -->
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/gallery-1.css" rel="stylesheet">

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
            <h2 class="pageTitle">Portfolio</h2>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
     <div class="container">
      <div class="row"> 
        <div class="col-md-12">
          <div class="about-logo">
            <h3>Voluptatem Accusantium Doloremque</h3>
            <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>
            <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>
          </div>  
        </div>
      </div> 
    </div>
  </section>	
  <!-- Start Gallery 1-2 -->
  <section id="gallery-1" class="content-block section-wrapper gallery-1">
    <div class="container">
      <div class="editContent">
        <ul class="filter">
          <li class="active"><a href="#" data-filter="*">All</a></li>
          <li><a href="#" data-filter=".artwork">Active</a></li>
          <li><a href="#" data-filter=".creative">Creative</a></li>
          <li><a href="#" data-filter=".nature">Nature</a></li>
          <li><a href="#" data-filter=".outside">Tiger</a></li>
          <li><a href="#" data-filter=".photography">Birds</a></li>
        </ul>
      </div>
      <!-- /.gallery-filter -->

      <div class="row">
        <div id="isotope-gallery-container">
          <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper artwork creative">
            <div class="gallery-item">
              <div class="gallery-thumb">
                <img src="img/works/11.jpg" class="img-responsive" alt="1st gallery Thumb" style="width: 400px; height: 250px;">
                <div class="image-overlay"></div>
                <a href="img/works/11.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
              </div>
            </div>
          </div>
          <!-- /.gallery-item-wrapper -->
          <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper nature outside">
            <div class="gallery-item">
              <div class="gallery-thumb">
                <img src="img/works/12.jpg" class="img-responsive" alt="2nd gallery Thumb"style="width: 400px; height: 250px;">
                <div class="image-overlay"></div>
                <a href="img/works/12.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
              </div>
            </div>
          </div>
          <!-- /.gallery-item-wrapper -->
          <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper photography artwork">
            <div class="gallery-item">
              <div class="gallery-thumb">
                <img src="img/works/13.jpg" class="img-responsive" alt="3rd gallery Thumb" style="width: 400px; height: 250px;">
                <div class="image-overlay"></div>
                <a href="img/works/13.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
              </div>
            </div>
          </div>
          <!-- /.gallery-item-wrapper -->
          <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper creative nature">
            <div class="gallery-item">
              <div class="gallery-thumb">
                <img src="img/works/14.jpg" class="img-responsive" alt="4th gallery Thumb"style="width: 400px; height: 250px;">
                <div class="image-overlay"></div>
                <a href="img/works/14.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
              </div>
            </div>
          </div>
          <!-- /.gallery-item-wrapper -->
          <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper nature photography">
            <div class="gallery-item">
              <div class="gallery-thumb">
                <img src="img/works/15.jpg" class="img-responsive" alt="5th gallery Thumb"style="width: 400px; height: 250px;">
                <div class="image-overlay"></div>
                <a href="img/works/15.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
              </div>
            </div>
          </div>
          <!-- /.gallery-item-wrapper -->
          <div class="col-md-4 col-sm-6 col-xs-12 gallery-item-wrapper artwork photography">
            <div class="gallery-item">
              <div class="gallery-thumb">
                <img src="img/works/16.jpg" class="img-responsive" alt="6th gallery Thumb"style="width: 400px; height: 250px;">
                <div class="image-overlay"></div>
                <a href="img/works/16.jpg" class="gallery-zoom"><i class="fa fa-eye"></i></a>
                <a href="#" class="gallery-link"><i class="fa fa-link"></i></a>
              </div>
            </div>
          </div>

        </div>
        <!-- /.isotope-gallery-container -->
      </div>
      <!-- /.row --> 
      <!-- /.container -->
    </div>
  </section>
  <!--// End Gallery 1-2 -->  
</div>
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
  <!-- Vendor Scripts -->
  <script src="js/modernizr.custom.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/animate.js"></script>
  <script src="js/custom.js"></script>

</body>
</html>