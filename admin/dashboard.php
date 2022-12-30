<?php
include('includes/checklogin.php');
check_login();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>Admin - Dashboard</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <?php include('includes/sidebar.php');?>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <?php include('includes/header.php');?>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>

          <div class="row mb-3">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Today Normal Adult Visitor</div>
                      <?php
                      $query=mysqli_query($con,"select sum(NoAdult) as totaladult from tblticindian where date(PostingDate)=CURDATE()");
                      $result=mysqli_fetch_array($query);
                      $count_today_visitors=$result['totaladult'];
                      ?>  
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count_today_visitors?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Today Normal Children Visitor</div>
                      <?php
                      $query=mysqli_query($con,"select sum(NoChildren) as totalchild from tblticindian where date(PostingDate)=CURDATE()");
                      $result=mysqli_fetch_array($query);
                      $count_today_cvisitors=$result['totalchild'];
                      ?>  
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count_today_cvisitors?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- New User Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Total Normal Visitors</div>
                      <?php
                      $query=mysqli_query($con,"select sum(NoAdult) as totaladult from tblticindian ");
                      $result=mysqli_fetch_array($query);
                      $count_total_visitors=$result['totaladult'];
                      ?>  
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $count_total_visitors?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Total Normal Children Visitor</div>
                      <?php
                      $query=mysqli_query($con,"select sum(NoChildren) as totalchild from tblticindian ");
                      $result=mysqli_fetch_array($query);
                      $count_total_cvisitors=$result['totalchild'];
                      ?>  
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count_total_cvisitors?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Today Foreigner Adult Visitor</div>
                      <?php
                      $query=mysqli_query($con,"select sum(NoAdult) as totaladult from tblticforeigner where date(PostingDate)=CURDATE()");
                      $result=mysqli_fetch_array($query);
                      $count_today_visitors=$result['totaladult'];
                      ?>  
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count_today_visitors?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Today Foreigner Children Visitor</div>
                      <?php
                      $query=mysqli_query($con,"select sum(NoChildren) as totalchild from tblticforeigner where date(PostingDate)=CURDATE()");
                      $result=mysqli_fetch_array($query);
                      $count_today_cvisitors=$result['totalchild'];
                      ?>  
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count_today_cvisitors?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- New User Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Total Foreigner Adult Visitor</div>
                      <?php
                      $query=mysqli_query($con,"select sum(NoAdult) as totaladult from tblticforeigner ");
                      $result=mysqli_fetch_array($query);
                      $count_total_visitors=$result['totaladult'];
                      ?>  
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $count_total_visitors?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Total Foreigner Children Visitor</div>
                      <?php
                      $query=mysqli_query($con,"select sum(NoChildren) as totalchild from tblticforeigner ");
                      $result=mysqli_fetch_array($query);
                      $count_total_cvisitors=$result['totalchild'];
                      ?>  
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $count_total_cvisitors?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include('includes/modal.php');?>
    <!---Container Fluid-->
  </div>
  <!-- Footer -->
  <?php include('includes/footer.php');?>

  <!-- Footer -->
</div>
</div>

<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/ruang-admin.min.js"></script>
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="js/demo/chart-area-demo.js"></script>  
</body>

</html>