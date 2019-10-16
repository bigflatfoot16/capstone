<?php
require "required/Head/Header.php";

require "required/Security/AdminSecurity.php";


require "required/Need/EditUsersSQL.php";



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
  <!--Reference for Datepickers-->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>


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
#frmstaffEdit{
  display: none;
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

          <div class="col-lg-4">
            <hr>
            <h3 class="my-2">My Users/Staffs</h3><hr>
             <div class="list-group">
              <button type="button" id="staffhide" class="btn btn-outline-success" style="width: 15rem" data-toggle="modal" data-target="#AddUser" data-any="ads">Add a Staff/User</button><br><!-- Angel Initially Hidden ung form sa baba eto ung pang show pero dapat nasa Data Table to tapos "Edit" pangalan  -->
             </div> 
            <hr>
            <form id="frmstaffEdit" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
              <input type="text" id="UserID" name="editID" style="display: none;">
              <input type="text" id="UserName" name="editName" style="display: none;">
              <b><p id="displayname">Name ng User na ie-edit</p></b><!-- Angel dito ilalagay ung Whole name ng User na ieedit-->
             <div class="form-row">
              <div class="form-group col-lg-7">
                <label for="staffNewPassword">New Password:</label>
                <input type="text" class="form-control" name="password" style="width: 22rem" id="staffNewPassword" placeholder="New Password">
              </div>
              <div class="form-group col-lg-9">
                <label for="staffConPass">Confirm Password:</label>
                <input type="text" class="form-control" name="confirmpass" style="width: 22rem" id="staffConPass" placeholder="Confirm Password">
               </div>
              <div class="form-group col-lg-6">
                    <label>Position</label>
                      <select id="editpos" class="form-control mb-2 mr-sm-2" name="position" style="width: 10rem">
                      <option value="Staff">Staff</option>
                      <option value="Rider">Rider</option>
                      </select>
              </div>  
              <div class="form-group col-lg-">
                    <label>User Status</label>
                      <select id="editstatus" class="form-control mb-2 mr-sm-2" name="accstatus" style="width: 10rem">
                      <option value="Active">Active</option>
                      <option value="Disabled">Disabled</option>
                      </select>
                  </div>            
             </div>           
                <button type="submit" name="savecha" class="btn btn-success" onclick="return confirm('Are you sure about your new Changes?')">Save Changes</button>
                <button type="button" class="btn btn-dark" id="btnCancel">Cancel</button>
            </form>            
             
          </div>

          <div class="col-lg-8">
          <hr>
          <h1 class="test">Users/Staffs</h1>
          <hr>
          <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
          <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
          <table data-toggle="Users" class="display">
          <thead>
            <th style="display: none;">UserID</th>
            <th>User Type</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Position</th>
            <th>Status</th>
            <th>Action</th>
          </thead>
          <tbody>
          <?php
          require "required/Table/EditUserTable.php";

          ?>
          </tbody>
          </table>
          </div>
        </div>  
            <hr>
          </div>        

        </div>

      </div>

  </div>
  <!-- /.container -->
  <!--Modal for Add User -->
<div class="modal fade" id="AddUser" tabindex="-1" role="dialog" aria-labelledby="OrderLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg bg-warning" role="document">
    <div class="modal-content">
      <div class="modal-header bg-warning">  
        <h5 class="modal-title" id="OrderLabel">Add a User/Staff</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="card my-2">
          <h5 class="card-header bg-info">Staff Info</h5>
          <div class="card-body">
           <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <div class="form-row">
                  <div class="form-group col-lg-4">
                    <label for="staffName">First Name</label>
                    <input type="text" class="form-control" name="staffName" placeholder="Name" required="">
                  </div>
                  <div class="form-group col-lg-5">
                    <label for="staffLName">Last Name</label>
                    <input type="text" class="form-control" name="staffLName" placeholder="Last Name" required="">
                  </div>
                  <div class="form-group col-lg-4">
                    <label for="staffNumber">Number</label>
                    <input type="number" min="1" class="form-control" name="staffNumber" placeholder="Number" required="">
                  </div><br>
                  <div class="form-group col-lg-7">
                    <label>Position</label>
                      <select class="form-control mb-2 mr-sm-2" name="Position" style="width: 10rem">
                      <option value="Staff">Staff</option>
                      <option value="Rider">Rider</option>
                      </select>
                  </div> <br>
                  <div class="form-group col-lg-4">
                    <label for="staffUsername">Username</label>
                    <input type="text" style="width: 15rem" class="form-control" name="staffUsername" placeholder="Username" required="">
                  </div><br>
                  <div class="form-group col-lg-7">
                    <label for="staffPassword">Password</label>
                    <input type="password" style="width: 15rem" class="form-control" name="staffPassword" placeholder="Password" required="">
                  </div><br>
                </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" name="AddUserStaff" onclick="return confirm('Are you sure about your new Staff?')">Add User</button>
        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
      </div></form>
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
      $('#AddUser').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var modal = $(this)
  })
  </script>
  </script>
  <script type="text/javascript">
    $(".dropdown-menu li a").click(function(){
    $(this).parents(".dropdown").find('.btn').html($(this).text() + ' <span class="caret"></span>');
    $(this).parents(".dropdown").find('.btn').val($(this).data('value'));
  });
  </script>
  <!--Angel eto ung code na pang show/hide ng form pwede mo to gamitin sa Edit pag sa data table-->
  <script type="text/javascript">
  $(document).ready(function() {
    $('.btnedit').click(function() {
      var currow = $(this).closest('tr');
      var id = currow.find('td:eq(0)').text();
      var col2 = currow.find('td:eq(2)').text();
      var col3 = currow.find('td:eq(3)').text();
      var col4 = currow.find('td:eq(4)').text();
      //$('#editpos').val(col4);
      var col5 = currow.find('td:eq(5)').text();
      //$('#editstatus').val(col5);
      $("#UserID:text").val(id);
      $("#UserName:text").val(col2+" "+col3);
      $('#displayname').text(col2+" "+col3);
      $('#editpos').val("");
      //document.getElementById("editpos").value = col4;
      $('#editstatus').val("");
      //document.getElementById("editstatus").value = col5;
      $('#frmstaffEdit').show(350);
      $('#staffNewPassword').focus();
    }); 
  });

   $(document).ready(function() {
    $('#btnCancel').click(function() {
        $('#frmstaffEdit').hide(300);

    });
  });
   $(document).ready(function() {
    $('#staffhide').click(function() {
        $('#frmstaffEdit').hide(100);

    });
  });
  </script>

<?php
if ($announce == 1) {
  if($change == 1){
    echo"<script>alert('".$efname." ".$elname." has been Activated.');</script>";
  }elseif ($change == 2) {
    echo"<script>alert('".$efname." ".$elname." has been Deactivated.');</script>";
  }
}
?>


</body>
<script type="text/javascript">
  $(document).ready(function () {
  $('#DB').DataTable({
  "searching": true // false to disable search (or any other option)
  });
  $('.dataTables_length').addClass('bs-select');
  });
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
</html>
