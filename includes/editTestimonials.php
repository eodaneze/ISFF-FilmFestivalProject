<?php
require_once('./connection.php');
  if(isset($_GET['id']));{
      
      $id = $_GET['id'];
      if(isset($_POST['update'])){
        $name = isset($_POST['name']) ? trim($_POST['name']) : "";
        $position = isset($_POST['position']) ? trim($_POST['position']) : "";
        $write = isset($_POST['write']) ? trim($_POST['write']) : "";
        
        $sql = "UPDATE `testimony` SET `name` = '$name', `position` = '$position', `write` = '$write' WHERE `id` = '$id'";
        $result = mysqli_query($con, $sql);
        if($result){
             $success = urlencode("Testimonials have been updated successfully");
             header("location: ../viewTestimonials.php?success=".$success);
        }else{
            $error = urlencode("Error Updating testimonial");
             header("location: ../viewTestimonials.php?error=".$error);
        }
      }
  }

?>