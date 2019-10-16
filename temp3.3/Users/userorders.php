<?php
require "../Admin/required/Head/Header.php";
$total = 0;
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
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/shop-homepage.css" rel="stylesheet">

   <!--Reference for Social Media icons-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style type="text/css">
  .carousel-item {
  height: 65vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.masthead {
  height: 25vh;
  min-height: 50px;
  background-image: url('https://source.unsplash.com/BtbjCFUvBXs/1920x1080');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
.fa {
  padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}
</style>
</head>

<body>

  <!-- Navigation ----------------------------------------------------------------->
<?php
if(isset($_SESSION['id']) && $_SESSION['id'] < 0){?>
<nav class="navbar navbar-expand-xl navbar-light bg-warning fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#" style="font-family: cursive;">
          <img src="../images/kagatsarapicon.png"   alt="" style="width:150px;height:65px">
          Kagat-Sarap Prituhan
        </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
      </button>          
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link bg-warning" href="guesthome.php">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link bg-warning" href="usermenu.php">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link bg-warning" href="contact.php">Contact Us</a>
        </li>        
        <li class="nav-item">
          <a class="nav-link bg-warning" href="mycart.php">My Cart</a>
        </li>  
        <li class="nav-item">
        <a href="userorders.php" class="nav-link bg-warning">My Orders</a>
        </li> 
        <li class="nav-item">  
          <a href="../Validation.php"><button type="button" class="btn btn-danger">Logout</button></a>  
        </li>           
      </ul>
    </div>
  </div>
</nav>

<?php
}else{
?>


<nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">
          <img src="../images/kagatsarapicon.png"   alt="" style="width:150px;height:60px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <h5 style="font-family:cursive;font-size: 20px">Kagat-Sarap Prituhan</h5>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">    
          <li class="nav-item">
            <a class="nav-link bg-warning" href="indexUser.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link bg-warning" href="usermenu.php">Order Now!</a>
          </li>  
          <li class="nav-item">
            <a class="nav-link bg-warning" href="mycart.php">My Cart</a>
          </li>  
          <li class="nav-item">     
            <button type="button" class="btn btn-info" data-toggle="popover" data-trigger="focus" data-placement="bottom" title="My Account">My Account</button>
          </li>        
        </ul>
      </div>
  </div>
</nav>


<?php
}
?>

<br><br>
<!-- loaded popover content -->
<ul id="popover-content" class="list-group" style="display: none">
  <a href="useraccounts.php" class="list-group-item" style="color: green">Edit My Account</a>
  <a href="userorders.php" class="list-group-item">My Orders</a>
  <a href="usertransact.php" class="list-group-item">Transaction History</a>
  <a href="userReview.php" class="list-group-item">Locate Us/Leave a Comment</a><br>
  <a href="../Validation.php" class="btn btn-danger">Logout</a>
 </ul>
<!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
        <hr>
        <h1 class="my-4">My Orders</h1>
        <div class="list-group">
          <a href="userorders.php" class="list-group-item">All</a>
          <a href="userorders.php?pay=COD" class="list-group-item">Via COD(Cash on Delivery)</a>
          <a href="userorders.php?pay=GCash" class="list-group-item">Via GCash</a>          
        </div>
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">
      <hr>
        <div class="row">

          <?php
          require "../Admin/required/Need/userordershow.php";
          ?>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

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
      $(function() {
      $('[data-toggle="popover"]').popover({
        html: true,
        content: function() {
          return $('#popover-content').html();
            }
          });
        })
            $('.popover-dismiss').popover({
        trigger: 'focus'
      })
  </script> 
  <script>
      $('#SignIn').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var modal = $(this)
  })
  </script>

</body>

</html>
