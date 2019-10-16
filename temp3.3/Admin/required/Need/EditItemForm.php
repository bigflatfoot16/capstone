<div class="card my-4">
  <?php
  if(isset($_POST['menuid'])){
    echo "<h2> Edit: ".$_POST['menuname']."</h2>";
  }else{
    echo "<div class='form-group'></div>
    <p class='col-md-4'>Add a new Product<hr></p>";
  }
  ?>
  <form method="get" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
    <div class="modal-body">
        <div class="form-group">
          <label for="itemName" class="col-form-label">Item Name:</label>
          <input type="text" class="form-control" id="itemName" style="width:30rem" name="itemName" value="<?php if(isset($_POST['menuname'])){echo $_POST['menuname'];} ?>"> 
        </div>
        <?php
          if(isset($_POST['menuid'])){
            echo "<input type='hidden' name='menuid' value=".$_POST['menuid']."/>";
          }
        ?>
        <div class="form-group">
          <label for="itemDesciption" class="col-form-label">Item Description:</label>
          <textarea type="text" class="form-control" id="itemDesc" style="width:30rem" name="itemDesc" value="<?php if(isset($_POST['menudesc'])){echo $_POST['menudesc'];} ?>"><?php if(isset($_POST['menudesc'])){echo $_POST['menudesc'];} ?> </textarea>
        </div>
        <div class="form-group">
          <label for="itemPrice" class="col-form-label">Item Price:</label>
          <input type="text" class="form-control" id="itemPrice" style="width:30rem" name="itemPrice" value="<?php if(isset($_POST['menuprice'])){echo $_POST['menuprice'];} ?>"> 
        </div>
        <div class="form-group">
              <label for="CategorySelect">Category</label>
              <select class="form-control mb-2 mr-sm-2" id="CategorySelect" name="CategorySelect"  style="width: 30rem" required="">
                <?php
                if(isset($_POST['menucate'])){?>
                  <option value="<?php echo $_POST['menucate'];?>"><?php echo $_POST['menucate'];?></option><?php
                  $menu = "SELECT * FROM category";
                  $cat = mysqli_query($con,$menu);
                  if(mysqli_num_rows($cat)>0){
                    foreach ($cat as $sql) {
                      if($sql['Category'] != $_POST['menucate']){?>
                        <option value="<?php echo $sql['Category'];?>"><?php echo $sql['Category'];?></option>
                      <?php
                      } 
                    }
                  }
                }else{
                  $menu = "SELECT * FROM category";
                  $cat = mysqli_query($con,$menu);
                  if(mysqli_num_rows($cat)>0){
                    foreach ($cat as $sql) {?>
                        <option value="<?php echo $sql['Category'];?>"><?php echo $sql['Category'];?></option>
                        <?php
                      }
                  }
                }
                ?>
                </select>
        </div>  
        <div>
          <p class="lead">Inventory:</p>
          <select id="changeinv" class="form-control mb-2 mr-sm-2" name="catunits" style="width: 20rem" onchange="getunits(this);">
              <?php $inv = "SELECT * FROM inventory";
                $cat = mysqli_query($con,$inv);
                if(mysqli_num_rows($cat)>0){
                  foreach ($cat as $sql) {
                      echo "<option value='".$sql['ItemName']."'>".$sql['ItemName']." ".$sql['ItemUnits']."</option>";
                    }
                }?>
            </select>
        </div>
        <div>
          <p class="lead">Quantity:</p>
          <input type="number" name="itemquan" style="width:200px; float: left;" min="1"><p id="unitss"></p>
        </div> <br><br> 
        <div>
          <p class="lead">Item Picture:</p>
          <input type="file" id="itemPic" name="fileup" style="width:200px" placeholder="Choose a Picture"> 
        </div>
    </div>
    <div class="modal-footer bg-warning">
      <button type="submit" name="Savebtn" class="btn btn-success" role="button">Save</button>
      <a href="admineditmenu.php"><button type="button" class="btn btn-danger">Cancel</button></a>
    </div>
  </form>



</div>