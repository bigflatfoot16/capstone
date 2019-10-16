<?php
if(isset($_GET['menu']) && $_GET['menu'] != "MyCart"){
  $sa = $_GET['menu'];
  $pro = "SELECT * FROM producttbl WHERE ProductCategory ='$sa'";
  $cat = mysqli_query($con,$pro);
  if(mysqli_num_rows($cat)>0){
    foreach ($cat as $sql) {
      $ingr = $sql['Ingredient'];
      $sql2 = "SELECT * FROM inventory WHERE ItemName = '$ingr'";
      $sq2 = mysqli_query($con,$sql2);
      if(mysqli_num_rows($sq2)>0){
        while($row = mysqli_fetch_array($sq2)){
          $invquan = $row['ItemQuantity'];
          if ($sql['NoIngredients']<= $invquan) {
            $max = $invquan/$sql['NoIngredients'];
            if($max>20){$max = 20;}?>
            <div class="col-lg-4 col-md-6 mb-4">
              <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
              <div class="card border-dark bg-info mb-3" style="max-width: 18rem;">
                <div class="card-header" style="font-size: 25px"><?php echo $sql['ProductName'];?></div>
                <div class="card-body bg-light">
                  <a href="#"><img class="card-img-top" src="../<?php echo $sql['ProductImage'];?>" alt=""></a>
                  <h4 class="card-title">
                   <h5><?php echo $sql['ProductPrice']; ?> Pesos</h5>
                  <p class="card-text"><?php echo $sql['ProductDesc'];?></p></h4>
                </div>
                <div class="card-footer bg-light">
                  <input type="hidden" name="productid" value="<?php echo $sql['ProductID'];?>">
                  <input type="hidden" name="productname" value="<?php echo $sql['ProductName'];?>">
                  <p class="lead">Quantity: 
                  <input type="number" name="quantity" style="width:3rem" min="1" max="<?php echo $max; ?>" required=""></p>
                  <button type="submit" name="addcart" class="btn btn-success" data-toggle="modal"data-any="ads">
                    Add to Cart
                  </button>
                    
                    
                </div>
              </div>
            </form>
            </div>
          <?php }
        }
      }
      ?>






        <?php
      }
    }
}else{
  ?>

  <?php
  $pro = "SELECT * FROM producttbl";
  $cat = mysqli_query($con,$pro);
  if(mysqli_num_rows($cat)>0){
    foreach ($cat as $sql) {
      $ingr = $sql['Ingredient'];
      $sql2 = "SELECT * FROM inventory WHERE ItemName = '$ingr'";
      $sq2 = mysqli_query($con,$sql2);
      if(mysqli_num_rows($sq2)>0){
        while($row = mysqli_fetch_array($sq2)){
          $invquan = $row['ItemQuantity'];
          if ($sql['NoIngredients']<= $invquan) {
            $max = $invquan/$sql['NoIngredients'];
            if($max>20){$max = 20;}?>
            <div class="col-lg-4 col-md-6 mb-4">
              <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
              <div class="card border-dark bg-info mb-3" style="max-width: 18rem;">
                <div class="card-header" style="font-size: 25px"><?php echo $sql['ProductName'];?></div>
                <div class="card-body bg-light">
                  <a href="#"><img class="card-img-top" src="../<?php echo $sql['ProductImage'];?>" alt=""></a>
                  <h4 class="card-title">
                   <h5><?php echo $sql['ProductPrice']; ?> Pesos</h5>
                  <p class="card-text"><?php echo $sql['ProductDesc'];?></p></h4>
                </div>
                <div class="card-footer bg-light">
                  <input type="hidden" name="productid" value="<?php echo $sql['ProductID'];?>">
                  <input type="hidden" name="productname" value="<?php echo $sql['ProductName'];?>">
                  <p class="lead">Quantity: 
                  <input type="number" name="quantity" style="width:3rem" min="1" max="<?php echo $max; ?>" required=""></p>
                  <button type="submit" name="addcart" class="btn btn-success" data-toggle="modal"data-any="ads">
                    Add to Cart
                  </button>
                    
                    
                </div>
              </div>
            </form>
            </div>
          <?php }
        }
      }
      ?>






        <?php
      }
    }
  

 }?>