<?php
if(isset($_POST['search'])){
  $from = date('Y-m-d',strtotime($_POST['fromsearch']));
  $to = date('Y-m-d',strtotime($_POST['tosearch']));
  $sql = "SELECT DISTINCT OrderNo, Customer, Username, Datetransacted FROM salestbl WHERE Datetransacted BETWEEN '$from' AND '$to'";
  $q = mysqli_query($con,$sql);
  foreach ($q as $sq){
    $order = $sq['OrderNo'];
    $date = $sq['Datetransacted'];
    $total = 0;
    $sql1 = "SELECT * FROM salestbl WHERE OrderNo = '$order' AND Datetransacted = '$date'";
    $q1 = mysqli_query($con,$sql1);
    foreach ($q1 as $sq1){$total += $sq1['TotalAmount'];}
    echo "<tr>";
    echo "<td>".$sq['OrderNo']."</td>";
    echo "<td>".$sq['Customer']."</td>";
    echo "<td>".$total."</td>";
    echo "<td>".$sq['Username']."</td>";
    echo "<td>".$sq['Datetransacted']."</td>";
    ?>
    <td><button type="button" class="@btn" onclick="window.open('admineditusers.php','popUpWindow','height=500,width=400,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');">View</button></td>
    <?php
    echo "</tr>";
  }
}else{
  $sql = "SELECT DISTINCT OrderNo, Customer, Username, Datetransacted FROM salestbl";
  $q = mysqli_query($con,$sql);
  foreach ($q as $sq){
    $order = $sq['OrderNo'];
    $date = $sq['Datetransacted'];
    $total = 0;
    $sql1 = "SELECT * FROM salestbl WHERE OrderNo = '$order' AND Datetransacted = '$date'";
    $q1 = mysqli_query($con,$sql1);
    foreach ($q1 as $sq1){$total += $sq1['TotalAmount'];}
    echo "<tr>";
    echo "<td>".$sq['OrderNo']."</td>";
    echo "<td>".$sq['Customer']."</td>";
    echo "<td>".$total."</td>";
    echo "<td>".$sq['Username']."</td>";
    echo "<td>".$sq['Datetransacted']."</td>";
    ?>
    <td><button type="button" class="@btn" onclick="window.open('OrderNo.php?Order=<?php echo $sq['OrderNo'];?>','popUpWindow','height=500,width=400,left=100,top=100,resizable=no,scrollbars=no,toolbar=yes,menubar=no,location=no,directories=no, status=yes');">View</button></td>
    <?php
    echo "</tr>";
  }
}
?>