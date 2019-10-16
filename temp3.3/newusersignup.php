<?php
require "Admin/required/Head/Header.php";

require "Admin/required/Login/login.php";

require "Admin/required/Need/newUser.php";

require "Admin/required/Security/MainSecurity.php";


require "Address/ListofBarangay.php";


?>


<link rel="stylesheet" href="jquery-editable-select-master/jquery-editable-select.css">


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
<nav class="navbar navbar-expand-sm navbar-light bg-warning fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#" style="font-family: cursive;">
          <img src="images/kagatsarapicon.png"   alt="" style="width:150px;height:65px">
          Kagat-Sarap Prituhan
        </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
      </button>          
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link bg-warning" href="index.php">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link bg-warning" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link bg-warning" href="menu.php">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link bg-warning" href="contact.php">Contact Us</a>
        </li>
        <li class="nav-item">  
          <button type="button" class="btn btn-light" data-toggle="modal" data-target="#SignIn" data-any="ads">Sign In</button>  
        </li>            
      </ul>
    </div>
  </div>
</nav>
<!--Modal for Sign In-->
<div class="modal fade  " id="SignIn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">  
        <h5 class="modal-title" id="exampleModalLabel">Sign In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label-center">UserName</label>
            <input type="text" class="form-control" id="name" style="width:200px">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Password</label>
            <input type="Password" class="form-control" id="pass" style="width:200px"> 
          </div>
          <div>
            Not a user?<a href="#" style="font-style: italic;" data-dismiss="modal"> click here</a>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Log In</button>
        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<!--Signup Section-->
<div class="container">

    <div class="row">
        <div class="col-lg-8">
        <br>
        <hr>      

        <!-- New User Form -->
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
          <div class="card my-4">
            <h5 class="card-header">Please Fill up the Details for Registration</h5>
            <div class="card-body">
             <form>
                  <div class="form-row">
                  <div class="form-group col-sm-10">
                    <label for="inputCity">City Name</label>                 
                    <input type="text" class="form-control" style="width: 8rem" id="inputCity" name="inputcity" required="" disabled="true" value="Manila">
                  </div>
                  <div class="form-group col-sm-4">
                    <label for="inputMunicipality">Municipality</label>
                    <select id="slt1" name="slt1" onchange="populate('slt1','slt2')" required="" style="width: 10rem;height: 2rem" >
                      <option></option>
                      <?php
                      require "Address/Municipality.php";
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
                    <div class="form-group col-sm-8-7">
                      <label for="inputFName">First Name</label>
                      <input type="text" class="form-control" style="width: 20rem" id="inputFName" name="inputFname" placeholder="Name" required="">
                    </div>

                    <div class="form-group col-sm-4">
                      <label for="inputLName">Last Name</label>
                      <input type="text" class="form-control" style="width: 20rem" id="inputLName" name="inputLname" placeholder="Name" required="">
                    </div>
                    <div class="form-group col-sm-8-7">
                      <label for="inputNumber">Number</label>
                      <input type="text" class="form-control" style="width: 20rem" id="inputNumber" name="inputNumber" placeholder="Number" required="">
                    </div>
                    <div class="form-group col-sm-4">
                      <label for="inputEmail">Email</label>
                      <label for="inputEmail" style="font-style: italic; ;color: red"><small>(Optional)</small></label>
                      <input type="email" class="form-control" style="width: 20rem"  id="inputEmail" name="inputEmail" placeholder="Email">
                    </div> 
                    <div class="form-group col-sm-8-7">
                      <label for="inputUsername">Username</label>                   
                      <input type="text" class="form-control" style="width: 20rem" id="inputUsername" name="inputUsername" placeholder="Username" required="">
                    </div> 
                    <div class="form-group col-sm-4">
                      <label for="inputPassword">Password</label>                   
                      <input type="Password" class="form-control" style="width: 20rem" id="inputPassword" name="inputPassword" placeholder="Password" required="">
                    </div>  
                    <div class="form-group col-sm-8">
                      <label for="inputConfirmPass">Confirm Password</label>                    
                      <input type="Password" class="form-control" id="inputConfirmPass" name="inputConfirmPass" placeholder="ConfirmPassword" required="">
                    </div>               
                  </div>           
                      <button type="submit" name="Submit" class="btn btn-primary" onclick="return confirm('Are you sure about your details?')">Submit</button>
                </form>
            </div>
          </div>          
        </div>
      </form>
      
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

<!--Modal for Thanks -->
<div class="modal fade  " id="Thanks" tabindex="-1" role="dialog" aria-labelledby="ThanksLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">  
        <h4 class="modal-title" id="ThanksLabel" style="font-family:monospace;">Thanks for Signing Up!</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
           <h5>You may now view your Transaction History and receive points for future orders.</h5>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <a href="useraccounts.php" class="btn btn-success" role="button">Continue</a>      
      </div>
    </div>
  </div>
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
          <a href="#"><img src="images/kagatsarapicon.png" alt="" style="width:200px;height:100px"></a>
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
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
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

  <script src="jquery-editable-select-master/jquery-editable-select.js"></script>
  <script>
  	//$('#slt2').editableSelect();
  </script>

</body>

</html>
