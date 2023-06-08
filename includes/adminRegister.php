<?php 
require_once("./connection.php");
 if(isset($_POST['submit'])){
    $name = isset($_POST['name']) ? trim($_POST['name']) : "";
    $email = isset($_POST['email']) ? trim($_POST['email']) : "";
    $uname = isset($_POST['uname']) ? trim($_POST['uname']) : "";
    $password = isset($_POST['password']) ? trim($_POST['password']) : "";
     
     if($name == "" || $email == "" || $uname == "" || $password == ""){
         $error = urlencode("All fields are required");
         header('location:../adminRegister.php?error='.$error);
         return false;
     }else{
        $name = trimData($name);
        $email = trimData($email);
        $uname = trimData($uname);
        $password = trimData($password);
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
                $filedestination = 'admindp/'.$pic;

                if(move_uploaded_file($filetmp, $filedestination)){
                    $md = date('Y-m-d');
                    $sql = "INSERT INTO admin(name, email, username, password, apic, createddate)VALUES('$name', '$email', '$uname', '$password', '$pic', '$md')";

                    $result = mysqli_query($con, $sql);
                    if($result){
                        $success = urlencode("Admin registration was successful!!");
                        header("location: ../adminLogin.php?success=".$success);
                        return false;
                    }else{
                        $error = urlencode("error creating admin");
							header("location: ../adminRegister.php?error=".$error);
							return false;
                    }
                }else{
                    $failed = urlencode("error uploading picture");
                    header("location: ../adminRegister.php?error=".$failed);
                    return false;
                }
        }else{
            $failed = urlencode("file uploaded too large");
			header("location: ../adminRegister.php?error=".$failed);
			return false;
        }
     }else{
        $failed = urlencode("unsupported file format");
        header("location: ../adminRegister.php?error=".$failed);
        return false;
     }
 }else{
    $error = urlencode('please upload a picture');
    header('location: ../adminRegister.php?error='.$error);
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