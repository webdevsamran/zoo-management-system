<?php
include('includes/checklogin.php');
check_login();
$pid=intval($_GET['pid']);  
$imgid=intval($_GET['imgid']);
if(isset($_POST['submit']))
{
  $aimage=$_FILES["animalimage"]["name"];
  move_uploaded_file($_FILES["animalimage"]["tmp_name"],"images/".$_FILES["animalimage"]["name"]);
  $sql="update  tblanimal set AnimalImage=:aimage where ID=:imgid";
  $query = $dbh->prepare($sql);

  $query->bindParam(':imgid',$imgid,PDO::PARAM_STR);
  $query->bindParam(':aimage',$aimage,PDO::PARAM_STR);
  $query->execute();
  $msg="Updated Successfully";
}

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
  <title>Admin - Change animal image</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
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
            <h1 class="h3 mb-0 text-gray-800">Animal Image</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Change Image</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Animal Images</h6>
                  <?php 
                  if($error){?>
                    <div class="errorWrap">
                      <strong>ERROR</strong>:<?php echo htmlentities($error); ?> 
                    </div>
                    <?php 
                  } 
                  else if($msg){?>
                    <div class="succWrap">
                      <strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> 
                    </div>
                    <?php 
                  }?>
                </div>
                <div class="card-body">
                  <form class="form-horizontal" name="package" method="post" enctype="multipart/form-data">
                    <?php 
                    $imgid=intval($_GET['imgid']);
                    $sql = "SELECT  AnimalImage from tblanimal where ID=:imgid";
                    $query = $dbh -> prepare($sql);
                    $query -> bindParam(':imgid', $imgid, PDO::PARAM_STR);
                    $query->execute();
                    $results=$query->fetchAll(PDO::FETCH_OBJ);
                    $cnt=1;
                    if($query->rowCount() > 0)
                    {
                      foreach($results as $result)
                      { 
                        ?>  
                        <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label"> Animal Image </label>
                          <div class="col-sm-8">
                            <img src="images/<?php echo htmlentities($result->AnimalImage);?>" width="200">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label">New Image</label>
                          <div class="col-sm-8">
                            <input type="file" name="animalimage" id="animalimage" required>
                          </div>
                        </div>  
                        <?php 
                      }
                    } ?>

                    <div class="row">
                      <div class="col-sm-8 col-sm-offset-2">
                        <button type="submit" name="submit" class="btn-primary btn">Update</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
          <!--Row-->

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Are you sure you want to logout?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                <a href="login.html" class="btn btn-primary">Logout</a>
              </div>
            </div>
          </div>
        </div>

      </div>
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

</body>

</html>