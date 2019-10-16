<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
<?php 
$menu = "SELECT * FROM category";
$cat = mysqli_query($con,$menu);
if(mysqli_num_rows($cat)>0){
  foreach ($cat as $sql) {?>
      <a href="<?php echo $_SERVER['PHP_SELF'] ?>?menu=<?php echo $sql['Category'];?>" class="list-group-item bg-light"><?php echo $sql['Category'];?></a><?php
    }
}
?>
</form>