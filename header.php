<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>

        <?php
          if(isset($title)){
            echo 'ISFF || ' . $title;
           }else{
             echo "ISFF";
           }
        
        ?>
    </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="dashboard_assets/img/favicon.png" rel="icon">
    <link href="dashboard_assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Vendor CSS Files -->
    <link href="dashboard_assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="dashboard_assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="dashboard_assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <!-- <link href="dashboard_assets/vendor/quill/quill.snow.css" rel="stylesheet"> -->
    <!-- <link href="dashboard_assets/vendor/quill/quill.bubble.css" rel="stylesheet"> -->
    <!-- <link href="dashboard_assets/vendor/remixicon/remixicon.css" rel="stylesheet"> -->
    <!-- <link href="dashboard_assets/vendor/simple-datatables/style.css" rel="stylesheet"> -->

    <!-- Template Main CSS File -->
    <link href="dashboard_assets/css/style.css" rel="stylesheet">


</head>