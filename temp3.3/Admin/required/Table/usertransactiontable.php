<?php 
if(isset($_POST['search'])){
  $from = date('Y-m-d',strtotime($_POST['fromsearch']));
  $to = date('Y-m-d',strtotime($_POST['tosearch']));
  $sql = "SELECT DISTINCT TransactionNumber, Totalamount, Username, dateTransacted, Incharge FROM transactiontbl WHERE UserID='".$_SESSION['id']."' AND dateTransacted BETWEEN '$from' AND '$to'";
  $q = mysqli_query($con,$sql);
  foreach ($q as $sq){
    echo "<tr>";
    echo "<td>".$sq['TransactionNumber']."</td>";
    echo "<td>".$sq['Totalamount']."</td>";
    echo "<td>".$sq['Incharge']."</td>";
    echo "<td>".$sq['dateTransacted']."</td>";
    ?>
    <td><button type="button" class="@btn" onclick="window.open('OrderNo.php?Order=<?php echo $sq['OrderNo'];?>','popUpWindow','height=500,width=400,left=100,top=100,resizable=no,scrollbars=no,toolbar=yes,menubar=no,location=no,directories=no, status=yes');">View Details</button></td>
    <?php
    echo "</tr>";
  }
}else{
  $sql = "SELECT DISTINCT TransactionNumber, Username, dateTransacted, Incharge FROM transactiontbl WHERE UserID='".$_SESSION['id']."'";
  $q = mysqli_query($con,$sql);
  $tranno = 0;
  foreach ($q as $sq){
    $tranno += 1;
    echo "<tr>";
    echo "<td>".$tranno."</td>";
    $tran = $sq['TransactionNumber'];
    $sql1 = "SELECT * FROM transactiontbl WHERE TransactionNumber = '$tran'";
    $q1 = mysqli_query($con,$sql1);
    foreach ($q1 as $sq1){$total += $sq1['ProductPrice'];}
    echo "<td>".$total."</td>";
    echo "<td>".$sq['Incharge']."</td>";
    echo "<td>".$sq['dateTransacted']."</td>";
    ?>
    <td><button type="button" class="@btn" onclick="window.open('TranNo.php?tran=<?php echo $sq['TransactionNumber'];?>&no=<?php echo $tranno;?>','popUpWindow','height=500,width=400,left=100,top=100,resizable=no,scrollbars=no,toolbar=yes,menubar=no,location=no,directories=no, status=yes');">View Details</button></td>
    <?php
    echo "</tr>";
  }
}
?>