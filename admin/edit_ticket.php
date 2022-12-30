<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit']))
{  
  $eib= $_SESSION['editbid'];
  $ticket=$_POST['ticket'];
  $price=$_POST['price'];
  $sql4="update tbltickettype set TicketType=:ticket,Price=:price where ID=:eib";
  $query=$dbh->prepare($sql4);
  $query->bindParam(':ticket',$ticket,PDO::PARAM_STR);
  $query->bindParam(':price',$price,PDO::PARAM_STR);
  $query->bindParam(':eib',$eib,PDO::PARAM_STR);
  $query->execute();
  if ($query->execute())
  {
    echo '<script>alert("Ticket detail has been Updated.")</script>';
  }else{
    echo '<script>alert("update failed! try again later")</script>';
  }
}
?>

<form role="form" id=" " method="post" enctype="multipart/form-data">
  <div class="card-body">
    <?php
    $eid=$_POST['edit_id4'];
    $sql2="SELECT * from tbltickettype where ID=:eid";
    $query2 = $dbh -> prepare($sql2);
    $query2-> bindParam(':eid', $eid, PDO::PARAM_STR);
    $query2->execute();
    $results=$query2->fetchAll(PDO::FETCH_OBJ);
    if($query2->rowCount() > 0)
    {
      foreach($results as $row)
      {
        $_SESSION['editbid']=$row->ID;
        ?>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label>Ticket Type</label>
              <input class="form-control" type="text" name="ticket" value="<?php  echo $row->TicketType;?>"   readonly>
            </div>        
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label>Price</label>
              <input class="form-control" type="text" name="price" value="<?php  echo $row->Price;?>" required>
            </div>        
          </div>
        </div>
        <?php 
      }
    } ?>
    <div class="modal-footer text-right">
      <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>