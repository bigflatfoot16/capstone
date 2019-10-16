<?php
if(isset($_GET['menu'])){
  $sa = $_GET['menu'];
  $pro = "SELECT * FROM producttbl WHERE ProductCategory ='$sa'";
  $cat = mysqli_query($con,$pro);
  if(mysqli_num_rows($cat)>0){
    foreach ($cat as $sql) {?>


        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card border-dark bg-info mb-3" style="max-width: 18rem;">
            <div class="card-header" style="font-size: 25px"><?php echo $sql['ProductName'];?></div>
            <div class="card-body bg-light">
              <a href="#"><img class="card-img-top" src="<?php echo $sql['ProductImage'];?>" alt=""></a>
              <h4 class="card-title">
               <h5><?php echo $sql['ProductPrice']; ?> Pesos</h5>
              <p class="card-text"><?php echo $sql['ProductDesc'];?></p></h4>
            </div>
            <div class="card-footer bg-light">
              <p class="lead">Quantity: 
              <input type="number" name="quantity" pattern="1-20"  min=1 style="width:3rem" value="1" required=""></p>
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Order" data-any="ads">
                Add to Cart
              </button>
            </div>
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
          <div class="card border-dark bg-info mb-3" style="max-width: 18rem;">
            <div class="card-header" style="font-size: 25px"><?php echo $sql['ProductName'];?></div>
            <div class="card-body bg-light">
              <a href="#"><img class="card-img-top" src="<?php echo $sql['ProductImage'];?>" alt=""></a>
              <h4 class="card-title">
               <h5><?php echo $sql['ProductPrice']; ?> Pesos</h5>
              <p class="card-text"><?php echo $sql['ProductDesc'];?></p></h4>
            </div>
            <div class="card-footer bg-light">
              <p class="lead">Quantity: 
              <input type="number" name="quantity" min="1" style="width:3rem" value="1" required=""></p>

              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#Order" data-any="ads">
                Add to Cart
              </button>
            </div>
          </div>
        </div>
        <?php
      }
    }
  

 }?>