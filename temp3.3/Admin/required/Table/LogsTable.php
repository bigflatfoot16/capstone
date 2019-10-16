<?php
$sql = "SELECT * FROM logs";
$q = mysqli_query($con,$sql);
foreach ($q as $sq){
  echo "<tr>";
  echo "<td>".$sq['Fname']." ".$sq['Lname']."</td>";
  echo "<td>".$sq['Details']."</td>";
  echo "<td>".$sq['DateMade']."</td>";
  echo "</tr>";
}
?>