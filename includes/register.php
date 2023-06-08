<?php
 if(isset($_POST['submit'])){
     $fname = $_POST['fname'];
     $lname = $_POST['lname'];
     $phone = $_POST['phone'];
     $email = $_POST['email'];
     $country = $_POST['country'];
     $org = $_POST['org'];
     $best_opt = $_POST['best_opt'];
     $checks = $_POST['checks'];

    if($fname == "" || $lname == "" || $phone == "" || $email == "" || $country == "" || $org == "" || $best_opt == "" || $checks == ""){
        $error = urlencode("All fields are required");
        header('location: ../register.php?error='.$error);
    }else{
        $md = date('Y:m:d');
        require('./connection.php');
        $sql = "INSERT INTO  user_register(fname, lname, phone, email, country, org, best_opt, checks, createddate)VALUES('$fname', '$lname', '$phone', '$email', '$country', '$org', '$best_opt', '$checks', '$md') ";
        $result = mysqli_query($con, $sql);
        if($result){
            $success = urlencode("Your registration into ISFF was successful. the admin will get back to you");
            header('location: ../register.php?success='.$success);
        }else{
            $error = urlencode("Error registering user, try again");
            header('location: ../register.php?error='.$error);
        }
    }

    
 }
?>