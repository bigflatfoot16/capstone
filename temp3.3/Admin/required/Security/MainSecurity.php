<?php
if(isset($_SESSION['Log'])){
  if($_SESSION['Log']<0){
    header("location:Users/guesthome.php");
  }elseif($_SESSION['Log']==0){
    header("location:Users/indexUser.php");
  }elseif($_SESSION['Log']==2){
    header("location:Admin/indexAdmin.php");
  }elseif($_SESSION['Log']==1){
    header("location:Admin/indexStaff.php");
  }elseif($_SESSION['Log']==3){
    header("location:Admin/indexRider.php");
  }
}
?>