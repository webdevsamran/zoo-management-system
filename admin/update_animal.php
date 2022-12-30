<?php
include('includes/checklogin.php');
check_login();
$aid=intval($_GET['pid']);  
if(isset($_POST['submit']))
{
  $aname=$_POST['animalname'];
  $breed=$_POST['breed']; 
  $adetails=$_POST['animaldetails']; 
  $sql="update tblanimal set AnimalName=:aname,Breed=:breed,Description=:adetails where ID=:aid";
  $query = $dbh->prepare($sql);
  $query->bindParam(':aname',$aname,PDO::PARAM_STR);
  $query->bindParam(':breed',$breed,PDO::PARAM_STR);
  $query->bindParam(':adetails',$adetails,PDO::PARAM_STR);
  $query->bindParam(':aid',$aid,PDO::PARAM_STR);
  $query->execute();
  if($query->execute()){
   $msg="Animal details updated successfully";
 }else{
   $msg="Failed Please try again later";
 }
 
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
  <title>Admin - Update Animal</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
  <style>
    .errorWrap {
      padding: 10px;
      margin: 0 0 20px 0;
      background: #fff;
      border-left: 4px solid #dd3d36;
      -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
      box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    }
    .succWrap{
      padding: 10px;
      margin: 0 0 20px 0;
      background: #fff;
      border-left: 4px solid #5cb85c;
      -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
      box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    }
  </style>
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
            <h1 class="h3 mb-0 text-gray-800">Animals</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Update Animal Details</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Update Animals</h6>
                </div>
                <div class="card-body">
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

                <?php 
                $aid=intval($_GET['pid']);
                $sql = "SELECT * from tblanimal where ID=:aid";
                $query = $dbh -> prepare($sql);
                $query -> bindParam(':aid', $aid, PDO::PARAM_STR);
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                $cnt=1;
                if($query->rowCount() > 0)
                {
                  foreach($results as $result)
                  { 
                    ?>
                    <form class="form-horizontal" name="package" method="post" enctype="multipart/form-data">
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label for="focusedinput" class=" control-label">Animal Name</label>
                          <div class="">
                            <input type="text" class="form-control" name="animalname" id="animalname" placeholder="Create Package" value="<?php echo htmlentities($result->AnimalName);?>" required>
                          </div>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="focusedinput" class=" control-label">Cage Number</label>
                          <div class="">
                            <input type="text" class="form-control" name="packagetype" id="packagetype" value="<?php echo htmlentities($result->CageNumber);?>" readonly>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-md-6">
                          <label for="focusedinput" class=" control-label">Feed Number</label>
                          <div class="">
                            <input type="text" class="form-control" name="feed" id="feed"value="<?php echo htmlentities($result->FeedNumber);?>" readonly>
                          </div>
                        </div>

                        <div class="form-group col-md-6">
                          <label for="focusedinput" class=" control-label">Breed</label>
                          <div class="">
                            <input type="text" class="form-control" name="breed" id="breed" placeholder="Package Features Eg-free Pickup-drop facility" value="<?php echo htmlentities($result->Breed);?>" required>
                          </div>
                        </div>
                      </div>   

                      <div class="row">
                        <div class="form-group col-md-6">
                          <label for="focusedinput" class=" control-label">Animal Details</label>
                          <div class="">
                            <textarea class="form-control" rows="5" cols="50" name="animaldetails" id="animaldetails" placeholder="Package Details" required><?php echo htmlentities($result->Description);?></textarea> 
                          </div>
                        </div>                              
                        <div class="form-group col-md-6">
                          <label for="focusedinput" class=" control-label">Package Image</label>
                          <div class="">
                            <img src="images/<?php echo htmlentities($result->AnimalImage);?>" width="200">&nbsp;&nbsp;&nbsp;<a href="change_image.php?imgid=<?php echo htmlentities($result->ID);?>">Change Image</a>
                          </div>
                        </div>
                      </div> 
                      <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                          <button type="submit" name="submit" class="btn-primary btn">Update</button>
                        </div>
                      </div>
                    </form>
                    <?php 
                  }
                } ?>
              </div>
            </div>

          </div>
        </div>
        <!--Row-->

        <!-- Modal Logout -->
        <?php include('includes/modal.php');?>

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