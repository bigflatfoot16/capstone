<?php
if(isset($_SESSION['Log'])){
  if($_SESSION['Log']<0){
    header("location:../Users/guesthome.php");
  }elseif($_SESSION['Log']==0){
    header("location:../Users/indexUser.php");
  }elseif($_SESSION['Log']==2){
    header("location:indexAdmin.php");
  }elseif($_SESSION['Log']==3){
    header("location:indexRider.php");
  }
}else{
  header("location:../index.php");
}
?>