<?php
if ($_GET['pay'] == "COD") {
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];
  $sql = "SELECT DISTINCT OrderNo, UnCode, OnChange FROM ordertbl WHERE Fname='$fname' AND Lname='$lname' AND OnChange!='GCash'";
  $q = mysqli_query($con,$sql);
  foreach ($q as $sl){?>
  <div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">              
      <div class="card-body">
        <h4 class="card-title">
          <h2>Order No <?php echo $sl['OrderNo']; $NO = $sl['OrderNo'];?></h2>

        </h4>
        <h5><div style='float: left;'><b>Item</b></div> <div style='float: right;'><b>Quantity</b></div><br>
          <?php
          $totalOrder = 0;
          $sql2 = "SELECT ProductName, ProductQuantity, TotalAmount FROM ordertbl WHERE OrderNo='$NO' AND Fname='$fname' AND Lname='$lname'";
          $q2 = mysqli_query($con,$sql2);

          foreach ($q2 as $sl2){
            echo "<p class='lead'><div style='float: left;'>".$sl2['ProductName']."</div><div style='float: right;'>".$sl2['ProductQuantity']."</div><br></p>";
            $totalOrder += $sl2['TotalAmount'];
          }
          ?>
          <?php echo $sl['OrderProcess'];?>
            
          </h5>
        <p class="card-text"><b style='float: right;'>Total: <?php echo $totalOrder;?> Pesos</b></p>
        <?php if ($sl['OnChange'] == "GCash") {
          echo "<p class='card-text'><b style='float: right;'>Paid Via: ".$sl['OnChange']." Pesos</b></p>";
        }else{
          echo "<p class='card-text'><b style='float: right;'>Change: ".$sl['OnChange']." Pesos</b></p>";
        }
        ?>

        <br><p class="card-text"><b style='float: right;'>Code: &nbsp<?php echo $sl['UnCode'];?></b></p>
      </div>
      <div class="card-footer" align="right">                
                  
      </div>
    </div>
  </div>
  <?php
  }
}elseif ($_GET['pay'] == "GCash") {
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];
  $sql = "SELECT DISTINCT OrderNo, UnCode, OnChange FROM ordertbl WHERE Fname='$fname' AND Lname='$lname' AND OnChange='GCash'";
  $q = mysqli_query($con,$sql);
  foreach ($q as $sl){?>
  <div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">              
      <div class="card-body">
        <h4 class="card-title">
          <h2>Order No <?php echo $sl['OrderNo']; $NO = $sl['OrderNo'];?></h2>

        </h4>
        <h5><div style='float: left;'><b>Item</b></div> <div style='float: right;'><b>Quantity</b></div><br>
          <?php
          $totalOrder = 0;
          $sql2 = "SELECT ProductName, ProductQuantity, TotalAmount FROM ordertbl WHERE OrderNo='$NO' AND Fname='$fname' AND Lname='$lname'";
          $q2 = mysqli_query($con,$sql2);

          foreach ($q2 as $sl2){
            echo "<p class='lead'><div style='float: left;'>".$sl2['ProductName']."</div><div style='float: right;'>".$sl2['ProductQuantity']."</div><br></p>";
            $totalOrder += $sl2['TotalAmount'];
          }
          ?>
          <?php echo $sl['OrderProcess'];?>
            
          </h5>
        <p class="card-text"><b style='float: right;'>Total: <?php echo $totalOrder;?> Pesos</b></p>
        <?php if ($sl['OnChange'] == "GCash") {
          echo "<p class='card-text'><b style='float: right;'>Paid Via: ".$sl['OnChange']." Pesos</b></p>";
        }else{
          echo "<p class='card-text'><b style='float: right;'>Change: ".$sl['OnChange']." Pesos</b></p>";
        }
        ?>

        <br><p class="card-text"><b style='float: right;'>Code: &nbsp<?php echo $sl['UnCode'];?></b></p>
      </div>
      <div class="card-footer" align="right">                
                  
      </div>
    </div>
  </div>
  <?php
  }
}else{
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];
  $sql = "SELECT DISTINCT OrderNo, UnCode, OnChange FROM ordertbl WHERE Fname='$fname' AND Lname='$lname'";
  $q = mysqli_query($con,$sql);
  foreach ($q as $sl){?>
  <div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">              
      <div class="card-body">
        <h4 class="card-title">
          <h2>Order No <?php echo $sl['OrderNo']; $NO = $sl['OrderNo'];?></h2>

        </h4>
        <h5><div style='float: left;'><b>Item</b></div> <div style='float: right;'><b>Quantity</b></div><br>
          <?php
          $totalOrder = 0;
          $sql2 = "SELECT ProductName, ProductQuantity, TotalAmount FROM ordertbl WHERE OrderNo='$NO' AND Fname='$fname' AND Lname='$lname'";
          $q2 = mysqli_query($con,$sql2);

          foreach ($q2 as $sl2){
            echo "<p class='lead'><div style='float: left;'>".$sl2['ProductName']."</div><div style='float: right;'>".$sl2['ProductQuantity']."</div><br></p>";
            $totalOrder += $sl2['TotalAmount'];
          }
          ?>
          <?php echo $sl['OrderProcess'];?>
            
          </h5>
        <p class="card-text"><b style='float: right;'>Total: <?php echo $totalOrder;?> Pesos</b></p>
        <?php if ($sl['OnChange'] == "GCash") {
          echo "<p class='card-text'><b style='float: right;'>Paid Via: ".$sl['OnChange']." Pesos</b></p>";
        }else{
          echo "<p class='card-text'><b style='float: right;'>Change: ".$sl['OnChange']." Pesos</b></p>";
        }
        ?>

        <br><p class="card-text"><b style='float: right;'>Code: &nbsp<?php echo $sl['UnCode'];?></b></p>
      </div>
      <div class="card-footer" align="right">                
                  
      </div>
    </div>
  </div>
  <?php
  }
}?>