<?php
$sql = "SELECT * FROM contacttbl";
$q = mysqli_query($con,$sql);
foreach ($q as $sq){
?>
<div class="col-lg-9 col-md-6 mb-4">
  <div class="card h-100">              
    <div class="card-body">
      <h6 class="card-title"><p style="float: right;"></p>
        Name: <?php echo $sq['contactName']."<p style='float: right;'>Date: ".$sq['contactDate']."</p><br>Number: ".$sq['contactNumber']."<br>".$sq['contactEmail'];?><hr>
      </h6>
      <p class="card-text">
        <?php echo $sq['contactcomments']?>
      </p>
    </div>
  </div>
</div>
<?php
}
?>