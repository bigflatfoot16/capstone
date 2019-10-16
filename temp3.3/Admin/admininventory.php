<?php
require "required/Head/Header.php";

require "required/Security/AdminSecurity.php";

require "required/Need/SQL/InventorySQL.php";
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
#frmAddItem{
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
        
        <div>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
              <script>
                  $('#datepickerTO').datepicker({
                      uiLibrary: 'bootstrap4'
                  });
              </script><br>

              <div class="list-group">
              <button type="button" id="addnewitem" class="btn btn-outline-success" style="width: 15rem" data-toggle="modal" data-target="#AddItem" data-any="ads">Add New Item</button><br>
              <button type="button" id="newitemcategory" class="btn btn-outline-info" style="width: 15rem" data-toggle="modal" data-target="#AddItemCat" data-any="ads">Add New Item Category</button><br>
              </div>

            </form>
            </div><hr>
            <form id="frmAddItem" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
              <input type="text" id="itemname" name="itemname" style="display: none;">
            <div class="form-row">
              <div class="form-group col-lg-7">
                <label for="inventoryITName">Item Name:</label>
                <input type="text" class="form-control" style="width:22rem" id="itemname2" name="itemname2" placeholder="Name">
              </div>
              <div class="form-group col-lg-6">
                <label for="inventoryITNameQty">Item Quantity:</label>
                <input type="number" min="1" class="form-control" style="width:10rem" id="editquan" name="editquan" placeholder="Quantity">
                <label>Item Unit</label>
                  <select class="form-control mb-2 mr-sm-2" id="editunits" name="editunits" style="width: 10rem">
                    <option value='g'>g</option>
                    <option value='L'>L</option>
                    <option value='pack/s'>pack/s</option>
                    <option value='pcs'>pcs</option>
                  </select>
              </div>
              <div class="form-group col-lg-5">
                    <label>Item Category</label>
                      <select class="form-control mb-2 mr-sm-2" id="editcate" name="editcate" style="width: 10rem">
                        <?php
                        require "required/Need/EditMenuSelectCategory.php";
                        ?>
                      </select>
              </div>  
              <div class="form-group col-lg-9">
                <label for="inventoryITPrice">Item Price:</label>
                <input type="number" min="1" class="form-control" style="width:16rem" id="editprice" name="editprice" placeholder="Price">
              </div>             
             </div>           
                <button id="btnItemSave" type="submit" name="save" class="btn btn-success">Save</button>
                <button id="btnItemDelete" type="submit" name="delete" class="btn btn-danger">Delete</button>
                <button type="button" class="btn btn-dark" id="btnCancel">Cancel</button>
            </form>            
             
      </div>
      <!-- /.col-lg-4 -->

      <div class="col-lg-8">
      <hr>
        <div class="column">
          <h1>Inventory</h1>
          <hr>
          <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
          <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
          <table id="DB" data-toggle="Items" class="display">
          <thead>
            <th>Item</th>
            <th>Quantity</th>
            <th>Units</th>
            <th>Category</th>
            <th>Price</th>
            <th>Action</th>
          </thead>
          <tbody>
          <?php
          require "required/Table/InventoryTable.php";
          ?>
          </tbody>
          </table>
        </div>
      </div>
      <!-- /.col-lg-9 --> 
      </div>
    <!-- /.row -->         
  </div>
  <!-- /.container -->

<!--Modal for Add Item in Inventory -->
<div class="modal fade  " id="AddItem" tabindex="-1" role="dialog" aria-labelledby="OrderLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg bg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-warning">  
        <h5 class="modal-title" id="OrderLabel">Add a New Item to the Inventory</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="card my-2">
          <h5 class="card-header bg-info">Item Info</h5>
          <div class="card-body">
           <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <div class="form-row">
                  <div class="form-group col-lg-7">
                    <label for="inventoryITName">Item Name</label>
                    <input type="text" class="form-control" name="addname" style="width: 20rem" id="inventoryITName" placeholder="Name" required="">
                    <br>
                    <label>Item Category</label>
                      <select class="form-control mb-2 mr-sm-2" name="addcate" style="width: 200px">
                        <?php
                        require "required/Need/InventoryListCategory.php";
                        ?>
                      </select>
                  </div>
                  <div class="form-group col-lg-4">
                    <label for="inventoryITNameQty">Quantity</label>
                    <input type="number" min="1" class="form-control" name="addquan" id="inventoryITNameQty" placeholder="Quantity" required="" min="1">

                    <label for="itemCategory" class="col-form-label">Units</label>
                    <select class="form-control mb-2 mr-sm-2" name="catunits" style="width: 10rem">
                      <option value='g'>g</option>
                      <option value='L'>L</option>
                      <option value='pack/s'>pack/s</option>
                      <option value='pcs'>pcs</option>
                    </select>

                    <label for="inventoryITPrice">Price</label>
                    <input type="number" style="width: 15rem" class="form-control" name="addprice" id="inventoryITPrice" placeholder="Price" required="" min="1">
                  </div><br>
                  <div class="form-group col-lg-7">
                    
                  </div>
                  <div class="form-group col-lg-4">
                    
                  </div><br>
                </div>           
              
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" name="additem" class="btn btn-success" role="button"id="AddItem" onclick="return confirm('Are you sure about the new Item?')">Add Item</button>
       <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button> 
      </form>
      </div>
    </div>
  </div>
</div>

<!--Modal for Add Item Category -->
<div class="modal fade  " id="AddItemCat" tabindex="-1" role="dialog" aria-labelledby="AddMenuCategory" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info">  
        <h5 class="modal-title" id="AddItemCat">Add a Category for your Items in Inventory</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">  
          <div class="form-group">
            <label for="itemCategory" class="col-form-label">Category Name:</label>
            <input type="text" class="form-control" id="itemCategory" name="newcategory" style="width:12rem" name="newItemCat">
          </div>
      </div>
      <div class="modal-footer bg-light">
        <button type="submit" class="btn btn-success" role="button" onclick="return confirm('Are you sure about the new Category?')">Add</button>
        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button></form>
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
      $('#AddItem').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var modal = $(this)
  })
      $('#AddItemCat').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var modal = $(this)
  })
  </script>
  <!--Angel eto ung code na pang show/hide ng form pwede mo to gamitin sa Edit pag sa data table-->
  <script type="text/javascript">
   $(document).ready(function() {
    $('.edititem').click(function() {
      var currow = $(this).closest('tr');
      var col1 = currow.find('td:eq(0)').text();
      var col2 = currow.find('td:eq(1)').text();
      var col5 = currow.find('td:eq(2)').text();
      var col3 = currow.find('td:eq(3)').text();
      var col4 = currow.find('td:eq(4)').text();

      $("#itemname:text").val(col1);
      $("#itemname2:text").val(col1);
      document.getElementById("editquan").value = col2;
      document.getElementById("editcate").value = col3;
      document.getElementById("editprice").value = col4;
      document.getElementById("editunits").value = col5;


      $('#frmAddItem').show(350);
      $('#inventoryITName').focus();
    }); 
  });
  $(document).ready(function() {
    $('#btnCancel').click(function() {
        $('#frmAddItem').hide(300);

    });
  });
  $(document).ready(function() {
    $('#addnewitem').click(function() {
        $('#frmAddItem').hide(300);

    });
  });
  $(document).ready(function() {
    $('#newitemcategory').click(function() {
        $('#frmAddItem').hide(300);

    });
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

</body>

</html>
