<?php
if ($_GET['pay'] == "GCash") {
  $sql = "SELECT DISTINCT OrderNo, Fname, Lname, Address, Landmark, ContactNumber, OnChange, SendSMS, SendDriver, UnCode FROM ordertbl WHERE OnChange = 'GCash'";
  $q = mysqli_query($con,$sql);
  foreach ($q as $sq){
    $order = $sq['OrderNo'];
  ?>
  <div class="col-lg-4 col-md-6 mb-4">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <div class="card h-100">              
      <div class="card-body">
        <h4 class="card-title">
          <h2><?php echo "Order ".$order;?></h2>
        </h4><hr> 
        <h5><?php
        echo $sq['Fname']." ".$sq['Lname']."<br><hr>"
        .$sq['Address']."<br><hr>".$sq['Landmark']."<br><hr>"
        .$sq['ContactNumber']."<br><hr>";

        if ($sq['OnChange'] == "GCash") {
          echo "GCash";
        }else{
          echo "Change: P".$sq['OnChange'];
        }?>
        </h5><hr>
        <p class="card-text"><div style='float: left;'><b>Item</b></div> <div style='float: right;'><b>Quantity</b></div><br>

          <input type="hidden" name="orno" value="<?php echo $order;?>">
          <input type="hidden" name="fname" value="<?php echo $sq['Fname'];?>">
          <input type="hidden" name="lname" value="<?php echo $sq['Lname'];?>">
          <input type="hidden" name="ConNumber" value="<?php echo $sq['ContactNumber'];?>">
          <input type="hidden" name="UniNumber" value="<?php echo $sq['UnCode'];?>">
          <?php
          $fname = $sq['Fname'];
          $lname = $sq['Lname'];
          $address = $sq['Address'];
          $number = $sq['ContactNumber'];

          $sqlitem = "SELECT * FROM ordertbl WHERE OrderNo='$order' AND Fname='$fname' AND Lname='$lname' AND Address='$address' AND ContactNumber='$number'";
          $sec = mysqli_query($con,$sqlitem);

          foreach ($sec as $item){
            echo "<div style='float: left;'>".$item['ProductName']."</div><div style='float: right;'>".$item['ProductQuantity']."</div><br>";
          }
          ?>
        </p>
      </div>
      <?php
      if ($sq['OnChange'] == "GCash") {?>
        <div class="card-footer" align="right">
        <div align="left"><?php
          if ($sq['SendSMS'] == 0) {
            echo "<button type='submit' name='NotifyGCash' class='btn btn-danger' onclick='return confirm('Are you sure?')'>Paying via GCash</button>";
          }
        ?>
        </div><hr><?php
      }else{
      ?>
      <div class="card-footer" align="right">
        <div align="left"><?php
          if ($sq['SendSMS'] == 0) {
            echo "<button type='submit' name='Notify' class='btn btn-danger' onclick='return confirm('Are you sure?')'>Notify the Customer</button>";
          }
        ?>
        </div><hr>
     <?php }?>
        <div align="left"><?php
          if ($sq['SendDriver'] == 0) {
            echo "<button type='submit' name='PassRider' class='btn btn-success' onclick='return confirm('Are you sure?')'>Pass the Order to Rider</button>";
          }
        ?>
        </div>             
      </div>
    </div>
    </form>
  </div>
  <?php
  }
}elseif ($_GET['pay'] == "COD") {
  $sql = "SELECT DISTINCT OrderNo, Fname, Lname, Address, Landmark, ContactNumber, OnChange, SendSMS, SendDriver, UnCode FROM ordertbl WHERE OnChange != 'GCash'";
  $q = mysqli_query($con,$sql);
  foreach ($q as $sq){
    $order = $sq['OrderNo'];
  ?>
  <div class="col-lg-4 col-md-6 mb-4">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <div class="card h-100">              
      <div class="card-body">
        <h4 class="card-title">
          <h2><?php echo "Order ".$order;?></h2>
        </h4><hr> 
        <h5><?php
        echo $sq['Fname']." ".$sq['Lname']."<br><hr>"
        .$sq['Address']."<br><hr>".$sq['Landmark']."<br><hr>"
        .$sq['ContactNumber']."<br><hr>";

        if ($sq['OnChange'] == "GCash") {
          echo "GCash";
        }else{
          echo "Change: P".$sq['OnChange'];
        }?>
        </h5><hr>
        <p class="card-text"><div style='float: left;'><b>Item</b></div> <div style='float: right;'><b>Quantity</b></div><br>

          <input type="hidden" name="orno" value="<?php echo $order;?>">
          <input type="hidden" name="fname" value="<?php echo $sq['Fname'];?>">
          <input type="hidden" name="lname" value="<?php echo $sq['Lname'];?>">
          <input type="hidden" name="ConNumber" value="<?php echo $sq['ContactNumber'];?>">
          <input type="hidden" name="UniNumber" value="<?php echo $sq['UnCode'];?>">
          <?php
          $fname = $sq['Fname'];
          $lname = $sq['Lname'];
          $address = $sq['Address'];
          $number = $sq['ContactNumber'];

          $sqlitem = "SELECT * FROM ordertbl WHERE OrderNo='$order' AND Fname='$fname' AND Lname='$lname' AND Address='$address' AND ContactNumber='$number'";
          $sec = mysqli_query($con,$sqlitem);

          foreach ($sec as $item){
            echo "<div style='float: left;'>".$item['ProductName']."</div><div style='float: right;'>".$item['ProductQuantity']."</div><br>";
          }
          ?>
        </p>
      </div>
      <?php
      if ($sq['OnChange'] == "GCash") {?>
        <div class="card-footer" align="right">
        <div align="left"><?php
          if ($sq['SendSMS'] == 0) {
            echo "<button type='submit' name='NotifyGCash' class='btn btn-danger' onclick='return confirm('Are you sure?')'>Paying via GCash</button>";
          }
        ?>
        </div><hr><?php
      }else{
      ?>
      <div class="card-footer" align="right">
        <div align="left"><?php
          if ($sq['SendSMS'] == 0) {
            echo "<button type='submit' name='Notify' class='btn btn-danger' onclick='return confirm('Are you sure?')'>Notify the Customer</button>";
          }
        ?>
        </div><hr>
     <?php }?>
        <div align="left"><?php
          if ($sq['SendDriver'] == 0) {
            echo "<button type='submit' name='PassRider' class='btn btn-success' onclick='return confirm('Are you sure?')'>Pass the Order to Rider</button>";
          }
        ?>
        </div>             
      </div>
    </div>
    </form>
  </div>
  <?php
  }
}else{
  $sql = "SELECT DISTINCT OrderNo, Fname, Lname, Address, Landmark, ContactNumber, OnChange, SendSMS, SendDriver, UnCode FROM ordertbl";
  $q = mysqli_query($con,$sql);
  foreach ($q as $sq){
    $order = $sq['OrderNo'];
  ?>
  <div class="col-lg-4 col-md-6 mb-4">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <div class="card h-100">              
      <div class="card-body">
        <h4 class="card-title">
          <h2><?php echo "Order ".$order;?></h2>
        </h4><hr> 
        <h5><?php
        echo $sq['Fname']." ".$sq['Lname']."<br><hr>"
        .$sq['Address']."<br><hr>".$sq['Landmark']."<br><hr>"
        .$sq['ContactNumber']."<br><hr>";

        if ($sq['OnChange'] == "GCash") {
          echo "GCash";
        }else{
          echo "Change: P".$sq['OnChange'];
        }?>
        </h5><hr>
        <p class="card-text"><div style='float: left;'><b>Item</b></div> <div style='float: right;'><b>Quantity</b></div><br>

          <input type="hidden" name="orno" value="<?php echo $order;?>">
          <input type="hidden" name="fname" value="<?php echo $sq['Fname'];?>">
          <input type="hidden" name="lname" value="<?php echo $sq['Lname'];?>">
          <input type="hidden" name="ConNumber" value="<?php echo $sq['ContactNumber'];?>">
          <input type="hidden" name="UniNumber" value="<?php echo $sq['UnCode'];?>">
          <?php
          $fname = $sq['Fname'];
          $lname = $sq['Lname'];
          $address = $sq['Address'];
          $number = $sq['ContactNumber'];

          $sqlitem = "SELECT * FROM ordertbl WHERE OrderNo='$order' AND Fname='$fname' AND Lname='$lname' AND Address='$address' AND ContactNumber='$number'";
          $sec = mysqli_query($con,$sqlitem);

          foreach ($sec as $item){
            echo "<div style='float: left;'>".$item['ProductName']."</div><div style='float: right;'>".$item['ProductQuantity']."</div><br>";
          }
          ?>
        </p>
      </div>
      <?php
      if ($sq['OnChange'] == "GCash") {?>
        <div class="card-footer" align="right">
        <div align="left"><?php
          if ($sq['SendSMS'] == 0) {
            echo "<button type='submit' name='NotifyGCash' class='btn btn-danger' onclick='return confirm('Are you sure?')'>Paying via GCash</button>";
          }
        ?>
        </div><hr><?php
      }else{
      ?>
      <div class="card-footer" align="right">
        <div align="left"><?php
          if ($sq['SendSMS'] == 0) {
            echo "<button type='submit' name='Notify' class='btn btn-danger' onclick='return confirm('Are you sure?')'>Notify the Customer</button>";
          }
        ?>
        </div><hr>
     <?php }?>
        <div align="left"><?php
          if ($sq['SendDriver'] == 0) {
            echo "<button type='submit' name='PassRider' class='btn btn-success' onclick='return confirm('Are you sure?')'>Pass the Order to Rider</button>";
          }
        ?>
        </div>             
      </div>
    </div>
    </form>
  </div>
  <?php
  }
}
?>
<meta http-equiv="refresh" content="10">