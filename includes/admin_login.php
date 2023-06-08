<?php 
require_once("./connection.php");
 if(isset($_POST['submit'])){
    $email = isset($_POST['email']) ? trim($_POST['email']) : "";
    $password = isset($_POST['password']) ? trim($_POST['password']) : "";
    $cpassword = isset($_POST['cpassword']) ? trim($_POST['cpassword']) : "";
     
     if( $email == "" || $password == "" || $cpassword == ""){
         $error = urlencode("All fields are required");
         header('location:../adminLogin.php?error='.$error);
         return false;
     }else{
        $email = trimData($email);
        $password = trimData($password);
        $cpassword = trimData($cpassword);
     }
     if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = urlencode("please enter a proper email");
        header("location: ../adminLogin.php?error=".$error);
        return false;
    }
    if($password != $cpassword){
         $error = urlencode("Password mismatch");
         header("location: ../adminLogin.php?error=".$error);
         return false;
         
     }else{
         $sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
         $result = mysqli_query($con, $sql);
         if(mysqli_num_rows($result) > 0){
             $row = mysqli_fetch_array($result);
             session_start();
             $_SESSION['adminid'] = $row['id'];
             if(isset($_SESSION['adminid'])){
                 $success = urlencode("You have logged in successfully");
                //    header('location: ../adminPanel.php?success='.$success);
                   header('location: ../adminPanel.php?success='.$success);
             }else{
                $failed = urlencode("email or password is incorrect");
                header('location: ../adminLogin.php?error='.$failed);
                return false;
             }
         }else{
            $notfound = urlencode('user not found');
            header('location: ../adminLogin.php?error='.$notfound);
            return false;
         }
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
<!-- <a href="../adminLogin.php"></a> -->