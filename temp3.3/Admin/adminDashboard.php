<?php
require "required/Head/Header.php";

require "required/Security/AdminSecurity.php";

require "required/Need/dashboardDetails.php";
?>




<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Kagat-Sarap Prituhan</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
  <!--Reference for Social Media icons-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--Reference for Datepickers-->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

<style type="text/css">
.dropdown{
    border-radius:5px;
    border:10px;
}
.dropdown-menu{
    background: #28a745 ;
    border:10px;
    top:80%;
    border-radius:5px 5px 5px 5px;
}
.dropdown-item:hover{
    background:#19672b;
    color:#f8f9fa;
}
.dropdown-menu a{
    color:#f8f9fa;
}
</style>


</head>

<body>

 <!-- Navigation -->
<nav class="navbar navbar-expand-xl navbar-light bg-warning fixed-top">
  <div class="container">
     <a class="navbar-brand" style="font-family: cursive;">
          <img src="../images/kagatsarapicon.png"   alt="" style="width:150px;height:65px">
          Kagat-Sarap Prituhan
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>            
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">        
        <li class="nav-item">
          <a class="nav-link bg-warning" href="indexAdmin.php" >Home<span class="sr-only">(current)</span></a>
        <li class="nav-item">
          <a class="nav-link bg-warning" href="adminorders.php">Orders</a>
        </li>
        <li class="nav-item dropdown dmenu">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Admin Controls</a>
          <div class="dropdown-menu sm-menu">
            <a class="dropdown-item" href="admineditmenu.php">Edit Menu</a>
            <a class="dropdown-item" href="admininventory.php">Inventory</a>            
            <a class="dropdown-item" href="adminsales.php">Sales Overview</a>
            <a class="dropdown-item" href="admineditusers.php">Users/Staffs</a>
            <a class="dropdown-item" href="adminDashboard.php">Dashboard</a>
            <a class="dropdown-item" href="adminlogs.php">Activity Logs</a>
            <a class="dropdown-item" href="adminSettings.php">Settings</a>
          </div>
        </li>       
        <li class="nav-item">
          <a class="nav-link bg-warning" href="admincomments.php">Comments</a>
        </li>
        </li>
        <li class="nav-item">
          <a href="../Validation.php"><button type="button" class="btn btn-danger">Logout</button></a>
        </li> 
        </li>
      </ul>
    </div>
  </div>
</nav>
<br><br>

<!-- Page Content -->
  <div class="container">

    <div class="row">
      <div class="col-lg-6">
        <?php
        echo "<h2 align='center'>Total Sales:</h2><br><h1 align='center'>P ".number_format($totalprofit,2)."</h1><br>";
        echo "<h1 align='center'>Top 3 Selling Items</h1><br>";
        echo "<h3 align='left'> 1. ".$item1st[0]."</h3><h3 align='right'>".$item1st[1]."</h3>";
        echo "<h3 align='left'>2. ".$item2nd[0]."</h3><h3 align='right'>".$item2nd[1]."</h3>";
        echo "<h3 align='left'>3. ".$item3rd[0]."</h3><h3 align='right'>".$item3rd[1]."</h3>";
        ?>
      </div>
      <div class="col-lg-6">
        <div id="donutchart" style="width: 100%; height: 300px;"></div>
      </div>
      <div class="col-lg-12">
        <div id="curve_chart_monthly" style="width: 100%; height: 400px;"></div>
      </div>
      <div class="col-lg-12">
        <div id="curve_chart_yearly" style="width: 100%; height: 400px;"></div>
      </div>
      

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

   <!-- Footer -->
<footer class="page-footer font-small bg-warning">
    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-3">
      <hr>
      <!-- Grid row -->
      <div class="row mt-3">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-1">

          <!-- Content -->
          <h6 class="text-uppercase font-weight-bold">Kagat-Sarap Prituhan</h6>
          <hr class="mb-2 mt-0 d-inline-block mx-auto" style="width: 150px;">
          <a href="#"><img src="../images/kagatsarapicon.png" alt="" style="width:200px;height:100px"></a>
          <p class="lead">
            Ang paboritong prituhan ng bayan!
          </p>

        </div>
      
        <div class="col-md-3 col-lg-2 col-md-3 mx-auto mb-1">
         
          <h6 class="text-uppercase font-weight-bold">Follow Us on</h6>
          <hr class="mb-2 mt-0 d-inline-block mx-auto" style="width: 100px;">
          <p class="lead d-inline-block">
            Facebook  <a href="https://web.facebook.com/kagatsarapprituhan2016/" class="fa fa-facebook"></a>
          </p>
        </div>
        
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-1">
         
          <h6 class="text-uppercase font-weight-bold">Contact Us</h6>
          <hr class="mb-2 mt-0 d-inline-block mx-auto" style="width: 60px;">  
          <p style="font-style: italic;">(02) 4931828</p> 
          <p style="font-style: italic;">  1970-Masbate Street, Sampaloc, Manila 
                Manila, Philippines</p>
          <p style="font-style: italic;">Monday to Sunday<br>9:00AM to 10:00PM</p>                
        </div>    

      </div>    

    </div>      
    <div class="footer-copyright text-center py-1">
      <p class="m-1 text-center-black">&copy;<script>document.write(new Date().getFullYear());</script> Kagat-Sarap Prituhan</p>
    </div>  

  </footer>
  <!-- Footer --> 



  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
  <script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();   
    });     
  </script>

  <script type="text/javascript">
    $(function () {
    $('[data-toggle="popover"]').popover()
  })
  </script>

  <script type="text/javascript">
      $(document).ready(function () {
      $('.navbar-light .dmenu').hover(function () {
              $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
          }, function () {
              $(this).find('.sm-menu').first().stop(true, true).slideUp(100)
          });
      });
  </script>

  <script>
      $('#SignIn').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var modal = $(this)
  })
  </script>



</body>

</html>
