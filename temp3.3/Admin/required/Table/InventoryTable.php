<?php
$sql12 = "SELECT * FROM inventory";
$q12 = mysqli_query($con,$sql12);
foreach ($q12 as $sq12){
  echo "<tr>";
  echo "<td>".$sq12['ItemName']."</td>";
  echo "<td>".$sq12['ItemQuantity']."</td>";
  echo "<td>".$sq12['ItemUnits']."</td>";
  echo "<td>".$sq12['ItemCategory']."</td>";
  echo "<td>".$sq12['ItemPrice']."</td>";
  echo "<td><button class='edititem'>Edit</button></td>";
  echo "</tr>";
}
?>