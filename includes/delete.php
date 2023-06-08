<?php
  require_once('./connection.php');
  if(isset($_GET['id'])){
      $id = $_GET['id'];
    $delsql = "DELETE FROM user_register WHERE id = '$id'";
    $delresult = mysqli_query($con, $delsql);

    if($delresult){
        $success = urlencode("User have been deleted successfully");
        header('location: ../adminPanel.php?success='.$success);
        return false;
    }else{
        $error = urlencode("Error deleting user");
        header('location: ../adminPanel.php?error='.$error);
        return false;
    }
  }

?>