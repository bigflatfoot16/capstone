<?php  
if(isset($_GET['cate'])){
  $sa = $_GET['cate'];
  $pro = "SELECT * FROM producttbl WHERE ProductCategory ='$sa'";
  $cat = mysqli_query($con,$pro);
  if(mysqli_num_rows($cat)>0){
    foreach ($cat as $sql) {?>

   <div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">              
      <div class="card-body">
        <form method="post" action="adminedititem.php"> 
        <a href="#"><img class="card-img-top" src="../<?php echo $sql['ProductImage'];?>" alt=""></a>
        <h4 class="card-title">
          <a href="#"><?php echo $sql['ProductName'];?></a>
          <button type="submit" class="close" aria-label="Close" name="deletemenu" value="<?php echo $sql['ProductID'];?>">
            <span aria-hidden="true">&times;</span>
          </button>
        </h4>
        <h5><?php echo $sql['ProductDesc']; ?></h5>
        <p class="card-text"><?php echo $sql['ProductPrice']; ?> Pesos</p>
        <input type='hidden' name='menuname' value="<?php echo $sql['ProductName']; ?>" />
        <input type='hidden' name='menudesc' value="<?php echo $sql['ProductDesc']; ?>" />
        <input type='hidden' name='menuprice' value="<?php echo $sql['ProductPrice']; ?>" />
        <input type='hidden' name='menucate' value="<?php echo $sql['ProductCategory']; ?>" />
      </div>
      <div class="card-footer" align="right">       
       
          <div class="form-group">
          <button class="btn btn-outline-success" type="submit" name="menuid" value="<?php echo $sql['ProductID'];?>" data-toggle="modal">Edit</button>  
          <button class="btn btn-outline-danger" type="submit"  name="deletemenu" value="<?php echo $sql['ProductID'];?>" onclick="return confirm('Are you sure about deleting this <?php echo $sql['ProductName']; ?>.')">Delete</button>  
          </div>
      </div>
    </form>
    </div>
  </div>
    <?php
    }
  }
}else{
  ?>

  <?php
  $pro = "SELECT * FROM producttbl";
  $cat = mysqli_query($con,$pro);
  if(mysqli_num_rows($cat)>0){
    foreach ($cat as $sql) {?>

   <div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">              
      <div class="card-body">
        <form method="post" action="adminedititem.php"> 
        <a href="#"><img class="card-img-top" src="../<?php echo $sql['ProductImage'];?>" alt=""></a>
        <h4 class="card-title">
          <a href="#"><?php echo $sql['ProductName'];?></a>
          <button type="submit" class="close" aria-label="Close" name="deletemenu" value="<?php echo $sql['ProductID'];?>">
            <span aria-hidden="true">&times;</span>
          </button>
        </h4>
        <h5><?php echo $sql['ProductDesc']; ?></h5>
        <p class="card-text"><?php echo $sql['ProductPrice']; ?> Pesos</p>
        <input type='hidden' name='menuname' value="<?php echo $sql['ProductName']; ?>" />
        <input type='hidden' name='menudesc' value="<?php echo $sql['ProductDesc']; ?>" />
        <input type='hidden' name='menuprice' value="<?php echo $sql['ProductPrice']; ?>" />
        <input type='hidden' name='menucate' value="<?php echo $sql['ProductCategory']; ?>" />
      </div>
      <div class="card-footer" align="right">       
       
          <div class="form-group">
          <button class="btn btn-outline-success" type="submit" name="menuid" value="<?php echo $sql['ProductID'];?>" data-toggle="modal">Edit</button>  
          <button class="btn btn-outline-danger" type="submit"  name="deletemenu" value="<?php echo $sql['ProductID'];?>" onclick="return confirm('Are you sure about deleting this <?php echo $sql['ProductName']; ?>.')">Delete</button>  
          </div>
      </div>
    </form>
    </div>
  </div>
  <?php
      }
    }
  

 }?>     