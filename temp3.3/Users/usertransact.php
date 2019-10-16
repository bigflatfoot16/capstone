<?php
require "../Admin/required/Head/Header.php";




?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Kagat-Sarap Prituhan</title>

    <!--Reference for Datepickers-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
  <link href="../css/shop-homepage.css" rel="stylesheet">
  <!--Reference for Social Media icons-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
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
      <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <hr>
            <h3 class="my-4">Transactions</h3>
            <div>              
              <h6>Pick a Date</h6>
              <p class="lead">From:</p>
              <input id="datepickerFROM" name="fromsearch" width="250"/>
              <script>
                  $('#datepickerFROM').datepicker({
                      uiLibrary: 'bootstrap4'
                  });
              </script>
              <p class="lead">To</p>
              <input id="datepickerTO" name="tosearch" width="250"/>
              <script>
                  $('#datepickerTO').datepicker({
                      uiLibrary: 'bootstrap4'
                  });
              </script><br>
              <button class="btn btn-info" name="search" type="submit">Search</button>
            </div><hr>
          </form>
    </div>

      <div class="col-lg-9">
      <hr>
        <div class="row">
          <h1>Transaction History</h1>


          <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
          <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
          <table id="Sales" data-toggle="Sales" class="display">
          <thead>
            <th>Order No.</th>
            <th>Total Amount</th>
            <th>Incharge</th>
            <th>Date Transacted</th>
            <th>Order Details</th>
          </thead>
          <tbody>
            <?php
              require "../Admin/required/Table/usertransactiontable.php";
            ?>
          </tbody>
          </table>









        </div>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
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


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.2.6/js/dataTables.fixedColumns.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.colVis.min.js"></script>
    <script type="text/javascript">
    $(document).ready( function () {
        $('table.display').DataTable({
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            dom: 'lBfrtip',
            buttons: ['colvis',
            {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            }]
        
        });
    } );
    </script>


</body>

</html>
