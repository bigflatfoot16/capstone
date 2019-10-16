<?php
require "../Admin/required/Head/Header.php";

require "../Admin/required/Login/login.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">x

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
  min-height: 500px;
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

  <!-- Navigation -->
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

<!--First Part-->
<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <h1 class="font-weight-hard" >Kagat Sarap Prituhan</h1>
        <p class="lead">Naki kagat-sarap prituhan ka na ba? Halina't tikman ang sarap na binabalikan ng buong bayan! Tara na dito sa #KSP</p>
      </div>
    </div>
  </div>
</header>

<!--/.First Part-->
<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>

    </ol>
    <div class="carousel-inner" role="listbox">
      
      <div class="carousel-item active" data-interval="3000" style="background-image: url('../images/9.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4">Pritong Leeg ng Manok</h3>
          <p class="lead">Ang Saktong Pulutan sa iyong Inuman!</p>
        </div>
      </div>

      <div class="carousel-item" data-interval="3000"  style="background-image: url('../images/13.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4">Pritong Pak Pak</h3>
          <p class="lead">Para kang lumilipad sa sarap!</p>
        </div>
      </div>
      
      <div class="carousel-item" data-interval="3000"  style="background-image: url('../images/3.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4">Pritong Manok</h3>
          <p class="lead">Ang walang kapares na pinritong manok!</p>
        </div>
      </div>
      
      <div class="carousel-item" data-interval="3000"  style="background-image: url('../images/5.jpg')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4" style="color:red">At Marami pang Iba</h3>
          <p class="lead">Dito lang yan sa #KSP Kagat-Sarap Prituhan!</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>
<!--Modal for Sign In-->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
<div class="modal fade  " id="SignIn" tabindex="-1" role="dialog" aria-labelledby="SignInLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">  
        <h5 class="modal-title" id="SignInLabel">Sign In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label-center">UserName</label>
            <input type="text" class="form-control" id="recipient-name" name="recipient-name" style="width:200px" required="">
          </div>
          <div class="form-group">
            <label for="Password" class="col-form-label">Password</label>
            <input type="Password" class="form-control" id="Password" name="Password" style="width:200px" required=""> 
          </div>
          <div>
            Not a user?<a href="newusersignup.php" style="font-style: italic;"> click here</a>
          </div>
        </form>
      </div>    
      <div class="modal-footer">
        <button type="submit" name="login" class="btn btn-success" >Login</button>
        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
</form>
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
  <script>
      $('#SignIn').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('any') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
  })
  </script>
  <script>
    $('.carousel').carousel({
    interval: 2000})
</script>

</body>


</html>
