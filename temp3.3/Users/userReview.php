<?php
require "../Admin/required/Head/Header.php";

require "../Admin/required/Security/UserSecurity.php";

require "../Admin/required/Need/submitComment.php";
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
          <img src="../images/kagatsarapicon.png"   alt="" style="width:150px;height:60px">
          Kagat-Sarap Prituhan
        </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
      </button>          
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link bg-warning" href="indexUser.php">Home<span class="sr-only">(current)</span></a>
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

<!-- loaded popover content -->
<ul id="popover-content" class="list-group" style="display: none">
  <a href="useraccounts.php" class="list-group-item" style="color: green">Edit My Account</a>
  <a href="userorders.php" class="list-group-item">My Orders</a>
  <a href="usertransact.php" class="list-group-item">Transaction History</a>
  <a href="userReview.php" class="list-group-item">Locate Us/Leave a Comment</a><br>
  <a href="../Validation.php" class="btn btn-danger">Logout</a>
 </ul>

<!--Contact Section-->
<div class="container">

    <div class="row">
        <div class="col-lg-8">
        <br>
        <hr>      

        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
           <form>
                <div class="form-row">
                   <div class="form-group col-sm-4-7">
                    <label for="conFName">First Name</label>
                    <input type="text" class="form-control"style="width: 15rem" id="conFName" name="fname" placeholder="Name" required="">
                  </div>
                  <div class="form-group col-sm-7">
                    <label for="conLName">Last Name</label>
                    <input type="text" class="form-control" style="width: 15rem" id="conLName" name="lname" placeholder="Last Name" required="">
                  </div>
                  <div class="form-group col-sm-4-7">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" style="width: 15rem" id="inputEmail" name="email" placeholder="Email">
                  </div>
                  <div class="form-group col-sm-7">
                    <label for="inputNumber">Number</label>
                    <input type="text" class="form-control" style="width: 15rem" id="inputNumber" name="number" placeholder="Number">
                  </div>
                  <div class="form-group col-sm-10">
                    <label for="inputComments">Comments</label>
                    <textarea class="form-control " rows="4"  id="inputComments" name="comment" placeholder="Insert your Message here"></textarea>
                  </div>                  
                </div>           
                    <button type="submit" class="btn btn-primary" name="submitComment" data-toggle="modal" data-target="#SignIn" data-any="ads">Submit</button>
              </form>
          </div>
        </div>
        <div class="card">
        <h5 class="card-header">Locate Us</h5>
        <form class="card-body"> 
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12550.49905576598!2d120.98847864093865!3d14.602312095770154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b61e06efa0e7%3A0xc9be3b2977cabcaa!2s1970+Masbate%2C+Sampaloc%2C+Maynila%2C+1008+Kalakhang+Maynila!5e1!3m2!1sen!2sph!4v1555253353904!5m2!1sen!2sph" width="700" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>           
        </form>       
        </div>       
      </div>
      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">
        <br><hr>
        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Contact Us</h5>
          <div class="card-body">
            <h5>Contact Number:</h5>
            <p style="font-style: italic;">(02) 4931828</p>
            <h5 >Address:</h5>
            <p style="font-style: italic;">1970-Masbate Street, Sampaloc, Manila <br>Manila, Philippines</p>
            <h5>Monday to Sunday</h5>
            <p style="font-style: italic;">9:00AM to 10:00PM</p>
          </div>
        </div>   
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
  <script>
      $('#Thanks').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var modal = $(this)
  })
  </script>



</body>

</html>
