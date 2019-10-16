<?php
$sql = "SELECT * FROM stafftbl";
$q = mysqli_query($con,$sql);
foreach ($q as $sq){
  echo "<tr>";
  echo "<td style='display: none;'>".$sq['UserID']."</td>";
  echo "<td>";
  if($sq['UserType'] == 2){
    echo "Admin";
  }elseif($sq['UserType'] == 1){
    echo "Staff";
  }elseif($sq['UserType'] == 3){
    echo "Driver";
  }
  echo "</td>";
  echo "<td>".$sq['SFname']."</td>";
  echo "<td>".$sq['SLname']."</td>";
  echo "<td>";
  if($sq['UserType'] == 1){
    echo"Staff";
  }elseif($sq['UserType'] == 2){
    echo"Admin";
  }else{
    echo"Driver";
  }
  echo "</td>";
  ?>
  <td><?php
  if($sq['Status'] == 1){
    echo"Active";
  }elseif($sq['Status'] == 2){
    echo"Deactive";
  }?></td>
  <?php
  if ($sq['UserType'] == 2) {
    echo "<td>Edit</td>";
  }else{?>
    <td><button class="btnedit">Edit</button></td>
  <?php
  }
  ?>
  <?php
  echo "</tr>";
}
?>