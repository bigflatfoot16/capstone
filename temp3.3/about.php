<?php
require "Admin/required/Head/Header.php";

require "Admin/required/Login/login.php";

require "Admin/required/Security/MainSecurity.php";
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
  <script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml      : true,
      version    : 'v4.0'
    });
  }; 
</script>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0"></script>
  <!-- Navigation -->
<nav class="navbar navbar-expand-xl navbar-light bg-warning fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#" style="font-family: cursive;">
          <img src="images/kagatsarapicon.png"   alt="" style="width:150px;height:60px">
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



  <!-- Content section -->
  <section class="py-5">
    <div class="container">
      <h1>Kagat-Sarap</h1>
      <p class="lead">History about Kagat Sarap</p>
      <p>Brief History of KSP Restaurant</p>
      </div>
  </section>

  <!-- Image Section - set the background image for the header in the line below -->
  <section class="py-4 bg-image-full" style="background-image: url('images/bg2.jpg');">
    <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
    <div style="height: 200px;"></div>  
  </section>

  <!-- Content section -->
  
  <section class="py-5">    
    <div class="container">
      <h1>Pictures </h1>
      <p class="lead">Facts About Kagat-Sarap Resto</p>
      <p>ex. Mission and Vision</p>
    </div>
  </section>
  <!-- Image Section - set the background image for the header in the line below -->
  <section class="py-4 bg-image-full" style="background-image: url('images/bg2.jpg');">
    <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
    <div style="height: 200px;"></div>
  </section>
  <section class="py-5">
    <form>
    <div class="container">
      <h1>Review Section </h1>
      <p class="lead">Comments and Reviews from Facebook</p>
      <div class="form-row">

    <div class="fb-post form-group col-lg-4" data-href="https://www.facebook.com/jhesskie/posts/2400219600031043" data-width="350" data-show-text="true"><blockquote cite="https://developers.facebook.com/jhesskie/posts/2400219600031043" class="fb-xfbml-parse-ignore"><p>SULIT NA SULIT ANG HALAGA AT NAPAKASARAP PA.... LALO NA ANG CHICHARON BULAKLAK...</p>Posted by <a href="#" role="button">Jhesskie Alvarez</a> on&nbsp;<a href="https://developers.facebook.com/jhesskie/posts/2400219600031043">Friday, September 6, 2019</a></blockquote></div> 

    <div class="fb-post form-group col-lg-4" data-href="https://www.facebook.com/chubs.crumez/posts/1117606085087697" data-width="300" data-show-text="true"><blockquote cite="https://developers.facebook.com/chubs.crumez/posts/1117606085087697" class="fb-xfbml-parse-ignore"><p>Ang sarap ng pata at ulo ng baboy na inorder ko kahapon pero wla ibang saya mismo may ari ng tindahan ung nag deliver napaka approachable at generous kaya salaute po ako sainyo...</p>Posted by <a href="#" role="button">Ariel Go Cruz</a> on&nbsp;<a href="https://developers.facebook.com/chubs.crumez/posts/1117606085087697">Wednesday, February 27, 2019</a></blockquote></div>

    <div class="fb-post form-group col-md-4" data-href="https://www.facebook.com/louierose.dayrit/posts/1929438893745483" data-width="400" data-show-text="true"><blockquote cite="https://developers.facebook.com/louierose.dayrit/posts/1929438893745483" class="fb-xfbml-parse-ignore"><p>sarap ulit ulitin. highly recommended</p>Posted by <a href="https://www.facebook.com/louierose.dayrit">Luirose Dayrit Soriano</a> on&nbsp;<a href="https://developers.facebook.com/louierose.dayrit/posts/1929438893745483">Saturday, September 1, 2018</a></blockquote></div> 

    <div class="fb-post form-group col-lg-4" data-href="https://www.facebook.com/clarisse.otcho/posts/2469100943150014" data-width="350" data-show-text="true"><blockquote cite="https://developers.facebook.com/clarisse.otcho/posts/2469100943150014" class="fb-xfbml-parse-ignore"><p>sarap nito and ang lutong nya :) panalo 😁</p>Posted by <a href="https://www.facebook.com/clarisse.otcho">Clarisse Vallespin</a> on&nbsp;<a href="https://developers.facebook.com/clarisse.otcho/posts/2469100943150014">Saturday, June 15, 2019</a></blockquote></div>

    <div class="fb-post form-group col-lg-4" data-href="https://www.facebook.com/jieanne.jayme/posts/830395010632513" data-width="350" data-show-text="true"><blockquote cite="https://developers.facebook.com/jieanne.jayme/posts/830395010632513" class="fb-xfbml-parse-ignore"><p>panalo!100% sa lutong sa lasa perfect!😊😊😊👌👌</p>Posted by <a href="https://www.facebook.com/jieanne.jayme">Jie Ann Jayme Caballero</a> on&nbsp;<a href="https://developers.facebook.com/jieanne.jayme/posts/830395010632513">Monday, March 11, 2019</a></blockquote></div>

    <div class="fb-video form-group col-lg-4" data-href="https://www.facebook.com/kagatsarapprituhan2016/videos/1147112805469994/" data-width="350" data-show-text="true"><blockquote cite="https://developers.facebook.com/kagatsarapprituhan2016/videos/1147112805469994/" class="fb-xfbml-parse-ignore"><a href="https://developers.facebook.com/kagatsarapprituhan2016/videos/1147112805469994/"></a><p>#patotoo post
    salamat po sa tiwala sa KSP</p>Posted by <a href="https://www.facebook.com/kagatsarapprituhan2016/">Kagat-Sarap Prituhan</a> on Friday, January 11, 2019</blockquote></div>

    </div>
    </div>
    </form>
  </section>

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



</body>

</html>
