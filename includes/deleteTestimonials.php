<?php
  require_once('./connection.php');
  if(isset($_GET['id'])){
      $id = $_GET['id'];
    $delsql = "DELETE FROM testimony WHERE id = '$id'";
    $delresult = mysqli_query($con, $delsql);

    if($delresult){
        $success = urlencode("Testimonial have been deleted successfully");
        header('location: ../viewTestimonials.php?success='.$success);
        return false;
    }else{
        $error = urlencode("Error deleting user");
        header('location: ../viewTestimonials.php?error='.$error);
        return false;
    }
  }

?>