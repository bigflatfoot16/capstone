<?php 
$menu = "SELECT * FROM category";
$cat = mysqli_query($con,$menu);
if(mysqli_num_rows($cat)>0){
  foreach ($cat as $sql) {?>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF'] ?>">
      <a href="<?php echo $_SERVER['PHP_SELF'] ?>?cate=<?php echo $sql['Category'];?>" class="list-group-item" name="menu"><?php echo $sql['Category'];?><button type="submit" name="deletecat" class="close" aria-label="Close" value="<?php echo $sql['Category'];?>"><span aria-hidden="true" onclick="return confirm('Are you sure about deleting this <?php echo $sql['Category'];?> Category?')">&times;</span></button></a>
    </form>
    <?php
  }
}
?>