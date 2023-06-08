<?php
 if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $capacity = $_POST['capacity'];
    $exp = $_POST['exp'];
    $commit = $_POST['commit'];


    if($fname == "" || $lname == "" || $phone == "" || $email == "" || $capacity == "" || $exp == "" || $commit == ""){
        $error = urlencode("All fields are required");
    }else{
        $md = date('Y:m:d');
        require('./connection.php');
        $sql = "INSERT INTO  volunteer(fname, lname, phone, email, capacity, expp, commit,	createddate)VALUES('$fname', '$lname', '$phone', '$email', '$capacity', '$exp', '$commit','$md') ";
        $result = mysqli_query($con, $sql);

        if($result){
            $success = urlencode("Your volunteer form have been submitted successfully, the admin we get back to you!!");
            header('location: ../volunteer.php?success='.$success);
        }else{
            $error = urlencode("Error submitting form, try again");
            header('location: ../volunteer.php?error='.$error);
        }
    }
 }

?>