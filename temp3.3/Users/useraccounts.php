<?php
require "../Admin/required/Head/Header.php";
require "../Admin/required/Security/UserSecurity.php";

require "../Address/ListofBarangay.php";


require "../Admin/required/Need/SQL/UpdateAccountSQL.php";




?>

<link rel="stylesheet" href="../jquery-editable-select-master/jquery-editable-select.css">


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
          <h5 class="card-header">Edit My Account</h5>
          <div class="card-body">
           <form>
                <div class="form-row">
                  <div class="form-group col-sm-7">
                    <label for="inputName">Username</label>
                    <input type="text" class="form-control" id="inputName" name="username" placeholder="Name" value="<?php echo $_SESSION['username']; ?>" disabled="true">
                  </div>
                  <div class="form-group col-sm-7">
                    <label for="inputPassword">New Password</label>
                    <input type="text" class="form-control" id="inputPassword" name="newpass" placeholder="Password"
                    value="<?php echo $_SESSION['password']; ?>" disabled="true">
                  </div>
                  <div class="form-group col-sm-7">
                    <label for="inputConPass">Confirm Password</label>
                    <input type="text" class="form-control" id="inputConPass" name="confpass" placeholder="Password"
                    value="<?php echo $_SESSION['password']; ?>" disabled="true">
                  </div>
                  <div class="form-group col-sm-7">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email"  value="<?php echo $_SESSION['email']; ?>" disabled="true">
                  </div>                  
                  <div class="form-group col-sm-4">
                    <label for="inputNumber">Number</label>
                    <input type="text" class="form-control" id="inputNumber" name="number" placeholder="Number"  value="<?php echo $_SESSION['number']; ?>" disabled="true">
                  </div>                  
                  <div class="form-group col-sm-10">
                    <label for="inputCity">City Name</label>                 
                    <input type="text" class="form-control" style="width: 8rem" id="inputCity" name="inputCity" placeholder="Manila" required="" disabled="true">
                  </div>
                  <div class="form-group col-sm-4">
                    <label for="inputMunicipality">Municipality</label>
                    <select id="slt1" name="slt1" onchange="populate('slt1','slt2')" required="" style="width: 10rem;height: 2rem" >
                      <option></option>
                      <?php
                      require "../Address/Municipality.php";
                      ?>
                    </select>
                  </div>
                  <div class="form-group col-sm-4">
                    <label for="inputBNumber">Barangay Number</label><br>
                    <select id="slt2" name="slt2" required="" style="width: 10rem;height: 2rem" >
                    </select>
                  </div>
                  <div class="form-group col-sm-4">
                    <label for="inputSNumber">Street Number</label><br>
                    <input type="text" class="form-control" id="inputSNumber" name="inputSNumber" placeholder="Street Number" required="">
                    </select>
                  </div>
                  <div class="form-group col-sm-4">
                    <label for="inputHNumber">House Number</label>
                    <input type="text" class="form-control" id="inputHNumber" name="inputHNumber" placeholder="House Number" required="">
                  </div>
                  <div class="form-group col-sm-8">
                    <label for="inputHNumber">Landmark</label>
                    <input type="text" class="form-control" id="inputMark" name="inputMark" placeholder="Landmark" required="">
                  </div>                                             
                </div>   
                    <input type="button" name="Edit" value="Edit" class="btn btn-success">         
                    <button type="submit" name="change" class="btn btn-primary" onclick="return confirm('Are you sure about your Changes?')">Save</button>
                    <a href="useraccounts.php" class="btn btn-danger" role="button" id="Cancel">Cancel</a>
              </form>
          </div>
        </div>             
      </div>
      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">
        <br><hr>
        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Account Details</h5>
          <div class="card-body">
            <h5>User Name</h5>
            <p style="font-style: italic;"><?php echo $_SESSION['username']; ?></p>
            <h5 >Address</h5>
            <p style="font-style: italic;"><?php echo $_SESSION['address']; ?> <br>Manila, Philippines</p>
            <h5>Number</h5>
            <p style="font-style: italic;"><?php echo $_SESSION['number']; ?></p>
            <h5>Email Address</h5>
            <p style="font-style: italic;"><?php echo $_SESSION['email']; ?></p>
            <h5>Accumulated Points</h5>
            <p style="font-style: italic;">Example Number of Accumulated Points through ordering</p>
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
  <script type="text/javascript">
    $(function () {
        $("input[name=Edit]").click(function () {
            if ($(this).val() == "Edit") {
                $("#inputName").removeAttr("disabled");
                $("#inputPassword").removeAttr("disabled");
                $("#inputConPass").removeAttr("disabled");
                $("#inputEmail").removeAttr("disabled");
                $("#inputAddress").removeAttr("disabled");
                $("#inputNumber").removeAttr("disabled");
                $("#slt1").removeAttr("disabled");
                $("#slt2").removeAttr("disabled");
                $("#inputHNumber").removeAttr("disabled");
                $('#inputName').focus();
          }
        });
    });   
  </script>

  <script src="../jquery-editable-select-master/jquery-editable-select.js"></script>
  <script>
    //$('#slt1').editableSelect();
    //$('#slt2').editableSelect();
  </script>
</body>

</html>
