<?php
  $menu = "SELECT * FROM inventorycategory";
  $cat = mysqli_query($con,$menu);
  if(mysqli_num_rows($cat)>0){
    foreach ($cat as $sql) {?>
        <option value="<?php echo $sql['Category'];?>"><?php echo $sql['Category'];?></option>
        <?php
      }
  }
  ?>