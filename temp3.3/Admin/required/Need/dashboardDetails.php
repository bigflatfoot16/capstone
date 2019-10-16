<?php
$totalprofit = 0;
$sql = "SELECT * FROM `transactiontbl`";
$q = mysqli_query($con,$sql);
if(mysqli_num_rows($q)>0){  foreach ($q as $sq){
    $totalprofit += $sq['ProductPrice'];
  }
}

$item1st  = array("FIST", 0);
$item2nd  = array("SECOND", 0);
$item3rd  = array("THIRD", 0);

$sql = "SELECT DISTINCT ProductName FROM ordertbl";
$q = mysqli_query($con,$sql);
foreach ($q as $sq){
  $quan = 0;
  $item = $sq['ProductName'];
  $sql2 = "SELECT * FROM ordertbl WHERE ProductName = '$item'";
  $q2 = mysqli_query($con,$sql2);
  foreach ($q2 as $sq2){
    $quan += $sq2['ProductQuantity'];
  }
  if($item3rd[1]<$quan){
    $item3rd[0] = $item;
    $item3rd[1] = $quan;
    if ($item2nd[1]<$item3rd[1]) {
      $tempitem = $item2nd[0];
      $tempquan = $item2nd[1];
      $item2nd[0] = $item3rd[0];
      $item2nd[1] = $item3rd[1];
      $item3rd[0] = $tempitem;
      $item3rd[1] = $tempquan;
      if ($item1st[1]<$item2nd[1]) {
        $tempitem = $item1st[0];
        $tempquan = $item1st[1];
        $item1st[0] = $item2nd[0];
        $item1st[1] = $item2nd[1];
        $item2nd[0] = $tempitem;
        $item2nd[1] = $tempquan;
      }
    }
  }
}

?>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Items', 'Quantity'],
          <?php
          echo "['".$item1st[0]."', ".$item1st[1]."],";
          echo "['".$item2nd[0]."', ".$item2nd[1]."],";
          echo "['".$item3rd[0]."', ".$item3rd[1]."]";
          ?>
        ]);

        var options = {
          chart: {
            title: 'Best Selling Items',
            subtitle: 'List of Best Items from Beginning to Present',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_Best_Seller'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>







<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Year', 'Sales'],
      <?php
      for ($i = date("Y")-9; $i <= date("Y"); $i++) {
        $from = $i."-01-01";
        $to = $i."-12-30";
        $sql = "SELECT * FROM `salestbl` WHERE Datetransacted BETWEEN '$from' AND '$to'";
        $q = mysqli_query($con,$sql);
        if(mysqli_num_rows($q)>0){
          $total = 0;
          foreach ($q as $sq){
            $total += $sq['TotalAmount'];
          }
          echo "['".date('Y',strtotime($to))."', ".$total."],";
        }
      }
      

      ?>
    ]);

    var options = {
      title: 'Past 10 Year Sales',
      curveType: 'function',
      legend: { position: 'bottom' }
    };

    var chart = new google.visualization.LineChart(document.getElementById('curve_chart_yearly'));

    chart.draw(data, options);
  }
</script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Year', 'Sales'],
      <?php
      $fromMonth = date("m")-11;
      $toMonth = date("m");
      $toYear = date("Y");
      for ($i = $fromMonth; $i <= $toMonth+1; $i++) {
        if ($i<1) {
          $Yea = $toYear - 1;
          $Mont = 12 + $i;
        }else{
          $Yea = $toYear;
          $Mont = $i;
        }
        $from2 = $Yea."-".$Mont."-01";
        $to2 = $Yea."-".$Mont."-28";
        $sql = "SELECT * FROM `salestbl` WHERE Datetransacted BETWEEN '$from2' AND '$to2'";
        $q = mysqli_query($con,$sql);
        if(mysqli_num_rows($q)>0){
          $total = 0;
          foreach ($q as $sq){
            $total += $sq['TotalAmount'];
            $mo = $sq['Datetransacted'];
          }
          echo "['".date('F',strtotime($mo))."', ".$total."],";
        }
      }
      

      ?>
    ]);

    var options = {
      title: 'Past 12 Month Sales',
      curveType: 'function',
      legend: { position: 'bottom' }
    };

    var chart = new google.visualization.LineChart(document.getElementById('curve_chart_monthly'));

    chart.draw(data, options);
  }
</script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load("current", {packages:["corechart"]});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Task', 'Hours per Day'],
      <?php
      $sql = "SELECT * FROM `category`";
      $q = mysqli_query($con,$sql);
      foreach ($q as $sq){
        $Cate = $sq['Category'];
        $total = 0;
        $sql2 = "SELECT * FROM `producttbl` WHERE ProductCategory = '$Cate'";
        $q2 = mysqli_query($con,$sql2);
        foreach ($q2 as $sq2){
          $ProName = $sq2['ProductName'];
          $sql3 = "SELECT * FROM `transactiontbl` WHERE ProductName = '$ProName'";
          $q3 = mysqli_query($con,$sql3);
          if(mysqli_num_rows($q3)>0){
            foreach ($q3 as $sq3){
              $total += $sq3['ProductQuantity'];
            }
          }
        }
        echo "['".$sq['Category']."', ".$total."],";
      }
      ?>
    ]);

    var options = {
      title: 'My Daily Activities',
      pieHole: 0.4,
    };

    var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
    chart.draw(data, options);
  }
</script>