<?php 
require_once("./connection.php");
 if(isset($_POST['submit'])){
    $name = isset($_POST['name']) ? trim($_POST['name']) : "";
    $write = isset($_POST['write']) ? trim($_POST['write']) : "";
     
     if($name == "" || $write == ""){
         $error = urlencode("All fields are required");
         header('location:../expectation.php?error='.$error);
         return false;
     }else{
        $name = trimData($name);
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
                $filedestination = 'expectationdp/'.$pic;

                if(move_uploaded_file($filetmp, $filedestination)){
                    $sql = "INSERT INTO   expectation(title, pic, write_up)VALUES('$name',  '$pic', '$write')";

                    $result = mysqli_query($con, $sql);
                    if($result){
                        $success = urlencode("New Expectation added successfully!!");
                        header("location: ../expectation.php?success=".$success);
                        return false;
                    }else{
                        $error = urlencode("error adding expectation");
							header("location: ../expectation.php?error=".$error);
							return false;
                    }
                }else{
                    $failed = urlencode("error uploading picture");
                    header("location: ../expectation.php?error=".$failed);
                    return false;
                }
        }else{
            $failed = urlencode("file uploaded too large");
			header("location: ../expectation.php?error=".$failed);
			return false;
        }
     }else{
        $failed = urlencode("unsupported file format");
        header("location: ../expectation.php?error=".$failed);
        return false;
     }
 }else{
    $error = urlencode('please upload a picture');
    header('location: ../expectation.php?error='.$error);
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