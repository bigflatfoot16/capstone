<?php
require "required/Head/Header.php";
require "required/Security/AdminSecurity.php";


require "required/Need/deleteExcessComment.php";
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
<br>


<!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
        <hr>
        <h1 class="my-4">Comments and Suggestions</h1>
        

      </div>
      <!-- /.col-lg-3 -->

      <!--Angel ilalagay mo sa mga cards sa baba ung mga details ng nag comment: ung Name ng nag Comment, tapos ung comment nya mismo, number and email din ng nag comment, tas ung date commented, un lang thanks. -->
      
       <div class="col-lg-9">
      <hr>
        <div class="row">
          <?php
          require "required/Need/CommentsShow.php";
          ?>
       
          
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

<!--Modals -->
<!--Modal for Add Menu Item -->
<div class="modal fade  " id="AddMenuItem" tabindex="-1" role="dialog" aria-labelledby="AddMenuItem" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">  
        <h5 class="modal-title" id="AddMenuItem" style="font-family: cursive;">Add an Item for your Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>"  enctype="multipart/form-data">
      <div class="modal-body">
          <div class="form-group">
            <label for="itemName" class="col-form-label">Item Name:</label>
            <input type="text" class="form-control" id="itemName" style="width:200px" name="itemName"> 
          </div>
          <div class="form-group">
            <label for="itemDesciption" class="col-form-label">Item Description:</label>
            <input type="text" class="form-control" id="itemDesc" style="width:200px" name="itemDesc"> 
          </div>
          <div class="form-group">
            <label for="itemPrice" class="col-form-label">Item Price:</label>
            <input type="text" class="form-control" id="itemPrice" style="width:200px" name="itemPrice"> 
          </div>
          <div class="form-group">
                <label for="CategorySelect">Category</label>
                <select class="form-control mb-2 mr-sm-2" id="CategorySelect" name="CategorySelect" style="width: 200px" required="">
                  
                  </select>
          </div>     
          <div>
            <p class="lead">Item Picture:</p>
            <input type="file" id="itemPic" name="fileup" style="width:200px" placeholder="Choose a Picture"> 
          </div>
      </div>
      <div class="modal-footer bg-warning">
        <button type="submit" name="addmenu" class="btn btn-success" role="button" style="font-family: cursive;">Add</button>        
      </div>
      </form>
    </div>
  </div>
</div>

<!--Modal for Add Menu Category -->
<div class="modal fade  " id="AddMenuCategory" tabindex="-1" role="dialog" aria-labelledby="AddMenuCategory" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info">  
        <h5 class="modal-title" id="AddMenuCategory" style="font-family: cursive;">Add a Category for your Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">  
          <div class="form-group">
            <label for="itemCategory" class="col-form-label">Category Name:</label>
            <input type="text" class="form-control" id="itemCategory" style="width:200px" name="newcat"> 
          </div>          
        </form>
      </div>
      <div class="modal-footer bg-light">
        <button type="submit" class="btn btn-outline-success" role="button" style="font-family: cursive;">Add</button></form>
      </div>
    </div>
  </div>
</div>

<!--Modal for Editing a Menu Item -->
<div class="modal fade" id="EditMenuItem" tabindex="-1" role="dialog" aria-labelledby="EditMenuItem" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">  
        <h5 class="modal-title" id="EditMenuItem" style="font-family: cursive;">Edit this Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>  
      <div class="modal-body">
        <div class="card h-100">              
              <div class="card-body">
                <a href="#"><img class="card-img-top" src="../images/kagatsarapicon.png" alt=""></a>
                <h4 class="card-title">
                  <a href="#"><?php echo $_POST['menudesc']; ?></a>
                </h4>
                <h5>Item Description here.</h5>
                <p class="card-text"><?php echo $_POST['menuprice']; ?> Pesos</p>

              </div>
              <div class="card-footer" align="right">      
              
              </div>
            </div>

            <form>
              <div class="form-row">
                <div class="form-group col-md-7">
                  <label for="itemName" class="col-form-label">Item Name:</label>
                  <input type="text" class="form-control" id="itemName" style="width:400px" name="itemName"> 
                </div>
                <div class="form-group col-lg-9">
                  <label for="itemDesciption" class="col-form-label">Item Description:</label>
                  <textarea class="form-control " rows="2" id="itemDesciption" placeholder="Insert Item Description here"></textarea> 
                </div>
                <div class="form-group col-md-7">
                  <label for="CategorySelect">Category</label>
                  <select class="form-control" id="CategorySelect" name="CategorySelect" style="width: 200px" required="">
                    

                    </select>
                </div> 
                <div class="form-group col-md-5">
                  <label for="itemPrice" class="col-form-label">Item Price:</label>
                  <input type="text" class="form-control" id="itemPrice" style="width:100px" name="itemPrice"> 
                </div>                 
                <div class="form-group col-md-6">
                  <p class="lead">Item Picture:</p>
                  <input type="file" id="itemPic" style="width:200px" placeholder="Choose a Picture"> 
                </div>
            </div>
           </form>
      </div>
      <div class="modal-footer bg-warning">
        <button class="btn btn-success" role="button" style="font-family: cursive;" data-dismiss="modal">Save</button>        
      </div>
    </div>
  </div>
</div>
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
  <script>
      $('#AddMenuCategory').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var modal = $(this)
  })
  </script>
  <script>
      $('#AddMenuItem').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var modal = $(this)
  })
  </script>
  <script>
      $('#EditMenuItem').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var modal = $(this)
  })
  </script>

<?php
if(isset($_POST['editmenu'])){
  echo "<script>$('#EditMenuItem').modal('show')</script>";
}
?>
</body>

</html>
