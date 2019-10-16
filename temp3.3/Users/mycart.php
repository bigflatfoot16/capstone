<?php
require "../Admin/required/Head/Header.php";
require "../Admin/required/Security/CartSecurity.php";
$status="";


require "../Admin/required/Need/SQL/CartSQL.php";



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
  <link href="../css/font-awesome.min.css" rel="stylesheet">

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

  <!-- Navigation ------------------------------------------------------------>
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
<?php
}
?>

 </ul>


<!-- loaded popover content -->
<ul id="popover-content" class="list-group" style="display: none">
  <a href="useraccounts.php" class="list-group-item" style="color: green">Edit My Account</a>
  <a href="userorders.php" class="list-group-item">My Orders</a>
  <a href="usertransact.php" class="list-group-item">Transaction History</a>
  <a href="userReview.php" class="list-group-item">Locate Us/Leave a Comment</a><br>
  <a href="../Validation.php" class="btn btn-danger">Logout</a>
 </ul>

<!-- Page Content -->


<br><br>
<h2 align="center">My Shopping Cart</h2>   



<div class="cart">
<?php
if(isset($_SESSION["cart"])){
    $_SESSION['total'] = 0.00;
?>	
<table class="table" border="1" cellpadding="10">
<tbody>
<tr align="center">
<td>#</td>
<td>ITEM NAME</td>
<td>QUANTITY</td>
<td>UNIT PRICE</td>
<td>ITEMS TOTAL</td>
</tr>	
<?php
require "../Admin/required/Need/mycarttable.php";?>
<tr>
<td colspan="5" align="right">
  <b>Lst Payment Method:</b><br>
  <input type="radio" name="tab" onclick="javascript:GCASHCheck();">GCash<br><input type="radio" name="tab" onclick="javascript:CODCheck();">Cash on Delivery
<strong><br><br>
<form id="CODform"style="display: none;" method='post' action='<?php echo $_SERVER['PHP_SELF'] ?>'>
  TOTAL: <?php echo "P &nbsp".$_SESSION['total']; ?><br>
  CASH: <input type="text" name="oncash"/><br></strong><br>
<button type="submit" name="CODPAY" class="btn btn-success" onclick="return confirm('Are you sure?')">
  Checkout
</button>
</form>
<form id="GCashform" style="display: none;" method='post' action='<?php echo $_SERVER['PHP_SELF'] ?>'>
  <b>GCash Payment</b><br></strong>
<button type="submit" name="GCASHPAY" onclick="return confirm('Are you sure?')">
  <img src="../images/button/GCash Button.jpg" style="width: 100px; height: 50px" alt="GCash">
</button>
</form>
   
</td>
</tr>
</tbody>
</table>		
  <?php
}else{
	echo "<h3 align='center'>Your cart is empty!</h3>";
	}
?>
</div>

<div style="clear:both;"></div>
<div class="message_box" style="margin:10px 0px;" align="center">
<?php echo $status; ?>
</div>
</div>

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
  <script type="text/javascript">
    function GCASHCheck(){
      document.getElementById('CODform').style.display ='none';
      document.getElementById('GCashform').style.display ='block';
    }
    function CODCheck(){
      document.getElementById('CODform').style.display = 'block';
      document.getElementById('GCashform').style.display = 'none';
    }
  </script>
 
</body>
</html>