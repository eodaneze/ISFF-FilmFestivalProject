<?php 
require_once("./connection.php");
 if(isset($_POST['submit'])){
    $name = isset($_POST['name']) ? trim($_POST['name']) : "";
    $position = isset($_POST['position']) ? trim($_POST['position']) : "";
    $write = isset($_POST['write']) ? trim($_POST['write']) : "";
    $password = isset($_POST['password']) ? trim($_POST['password']) : "";
     
     if($name == "" || $position == "" || $write == ""){
         $error = urlencode("All fields are required");
         header('location:../testimonies.php?error='.$error);
         return false;
     }else{
        $name = trimData($name);
        $position = trimData($position);
        $write = trimData($write);
     }

     if($_FILES['file']['name'] != ''){
        $filename = $_FILES['file']['name'];
        $filetmp = $_FILES['file']['tmp_name'];
        $filesize = $_FILES['file']['size'];
        $filetype = $_FILES['file']['type'];
        $fileext = explode('.', $filename);
        $fileactualext = strtolower(end($fileext));

        $allow = array('jpg', 'jpeg', 'png', 'gif');
        if(in_array($fileactualext, $allow)){
            if($filesize < 8000000){
                $pic = uniqid('',true).'.'.$fileactualext;
                $filedestination = 'testimonialdp/'.$pic;

                if(move_uploaded_file($filetmp, $filedestination)){
                    $sql = "INSERT INTO  testimony(name, position, pic,	write_test)VALUES('$name', '$position', '$pic', '$write')";

                    $result = mysqli_query($con, $sql);
                    if($result){
                        $success = urlencode("New testimonial added successfully!!");
                        header("location: ../testimonies.php?success=".$success);
                        return false;
                    }else{
                        $error = urlencode("error adding testimonial");
							header("location: ../testimonies.php?error=".$error);
							return false;
                    }
                }else{
                    $failed = urlencode("error uploading picture");
                    header("location: ../testimonies.php?error=".$failed);
                    return false;
                }
        }else{
            $failed = urlencode("file uploaded too large");
			header("location: ../testimonies.php?error=".$failed);
			return false;
        }
     }else{
        $failed = urlencode("unsupported file format");
        header("location: ../testimonies.php?error=".$failed);
        return false;
     }
 }else{
    $error = urlencode('please upload a picture');
    header('location: ../testimonies.php?error='.$error);
    return false;
 }
 }else{
    $error = urlencode("please login first");
    header("location: ../index.php?error=".$error);
    return false;
 }
 
 function trimData($data){
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripcslashes($data);

    return $data;
}

?>