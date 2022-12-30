<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit']))
{
  $adult=$_POST['adult'];
  $children=$_POST['children'];
  $aprice=$_POST['aprice'];
  $cprice=$_POST['cprice'];
  $ticketid=mt_rand(100000000, 999999999);
  $sql="insert into  tblticindian (TicketID,NoAdult,NoChildren,AdultUnitprice,ChildUnitprice)values(:ticketid,:adult,:children,:aprice,:cprice)";
  $query=$dbh->prepare($sql);
  $query->bindParam(':adult',$adult,PDO::PARAM_STR);
  $query->bindParam(':children',$children,PDO::PARAM_STR);
  $query->bindParam(':aprice',$aprice,PDO::PARAM_STR);
  $query->bindParam(':cprice',$cprice,PDO::PARAM_STR);
  $query->bindParam(':ticketid',$ticketid,PDO::PARAM_STR);
  $query->execute();
  $LastInsertId=$dbh->lastInsertId();
  if ($LastInsertId>0) {
    echo '<script>alert("Ticket information has been added.")</script>';
    echo "<script>window.location.href = 'manage_normal_ticket.php'</script>";
  }
  else
  {
   echo '<script>alert("Something Went Wrong. Please try again")</script>';
 }
}
?>

<form role="form" id=" " method="post" enctype="multipart/form-data">
  <div class="card-body">
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label>Adult</label>
          <input class="form-control" type="text" name="adult" placeholder="No of Adults" required>
        </div>        
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label>Children</label>
          <input class="form-control" type="text" name="children" placeholder="No of children" required>
        </div>        
      </div>
    </div>
    <?php
    $sql="SELECT * from tbltickettype where TicketType='Normal Adult'";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0)
    {
      foreach($results as $row)
      {
        ?>
        <input type="hidden" name="aprice" value="<?php  echo $row->Price;?>">
        <?php 
      }
    } ?>
    <?php
    $sql="SELECT * from tbltickettype where TicketType='Normal Child'";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0)
    {
      foreach($results as $row)
      {
        ?>
        <input type="hidden" name="cprice" value="<?php  echo $row->Price;?>">
        <?php 
      }
    } ?>
    <div class="modal-footer text-right">
      <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>