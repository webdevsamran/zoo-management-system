<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<div class="card">
  <div class="card-body" id="exampl">
    <?php
    $eid=$_POST['edit_id5'];
    $sql="SELECT * from tblticindian where ID=:eid";
    $query = $dbh -> prepare($sql);
    $query-> bindParam(':eid', $eid, PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0)
    {
      foreach($results as $row)
        {?>

          <h4 style="color: blue">Ticket Information</h4>
          <table border="1" class="table table-striped table-bordered first" >
            <tr>
              <th>#</th>
              <th>No of Tickets</th>
              <th>Price per unit</th>
              <th>Total</th>
            </tr>
            <tr>
              <th >Number of Adult </th>
              <td style="padding-left: 10px"><?php  echo $noadult=$row->NoAdult;?></td>
              <td style="padding-left: 10px">$<?php  echo $cup=$row->AdultUnitprice;?></td>
              <td style="padding-left: 10px">$<?php  echo $ta=$cup*$noadult;?></td>
            </tr>
            <tr>
              <th>Number of Chlidren </th>
              <td style="padding-left: 10px"><?php  echo $nochild=$row->NoChildren ;?></td>
              <td style="padding-left: 10px">$<?php  echo $aup=$row->ChildUnitprice ;?></td>
              <td style="padding-left: 10px">$<?php  echo $tc=$aup*$nochild;?></td>
            </tr>

            <tr>
              <th style="text-align: center;color: red;font-size: 20px" colspan="3">Total Ticket Price</th>
              <td style="padding-left: 10px;">$<?php  echo ($ta+$tc);?></td>
            </tr>
          </table>
          <?php 
        }
      } ?>
    </div>
    <p style="margin-top:1%"  align="center">
      <i class="fa fa-print fa-2x" style="cursor: pointer;"  OnClick="CallPrint(this.value)" ></i>
    </p>
  </div>