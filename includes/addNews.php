<?php 
require_once("./connection.php");
 if(isset($_POST['submit'])){
    $name = isset($_POST['name']) ? trim($_POST['name']) : "";
    $author = isset($_POST['author']) ? trim($_POST['author']) : "";
    $link = isset($_POST['link']) ? trim($_POST['link']) : "";
    $write = isset($_POST['write']) ? trim($_POST['write']) : "";
     
     if($name == "" || $author == "" || $link == "" || $write == ""){
         $error = urlencode("All fields are required");
         header('location:../addNews.php?error='.$error);
         return false;
     }else{
        $name = trimData($name);
        $author = trimData($author);
        $link = trimData($link);
        $write = trimData($write);
     }

     if($_FILES['file']['name'] != ''){
        $filename = $_FILES['file']['name'];
        $filetmp = $_FILES['file']['tmp_name'];
        $filesize = $_FILES['file']['size'];
        $filetype = $_FILES['file']['type'];
        $fileext = explode('.', $filename);
        $fileactualext = strtolower(end($fileext));

        $allow = array('jpg', 'jpeg', 'png', 'gif', 'webp');
        if(in_array($fileactualext, $allow)){
            if($filesize < 8000000){
                $pic = uniqid('',true).'.'.$fileactualext;
                $filedestination = 'newsdp/'.$pic;

                if(move_uploaded_file($filetmp, $filedestination)){
                    $md = date('Y-m-d');
                    $sql = "INSERT INTO news(title, author, write_news, pic, createddate, link)VALUES('$name',  '$author', '$write', '$pic', '$md',  '$link')";

                    $result = mysqli_query($con, $sql);
                    if($result){
                        $success = urlencode("News added successfully!!");
                        header("location: ../addNews.php?success=".$success);
                        return false;
                    }else{
                        $error = urlencode("error adding adding News");
							header("location: ../addNews.php?error=".$error);
							return false;
                    }
                }else{
                    $failed = urlencode("error uploading picture");
                    header("location: ../addNews.php?error=".$failed);
                    return false;
                }
        }else{
            $failed = urlencode("file uploaded too large");
			header("location: ../addNews.php?error=".$failed);
			return false;
        }
     }else{
        $failed = urlencode("unsupported file format");
        header("location: ../addNews.php?error=".$failed);
        return false;
     }
 }else{
    $error = urlencode('please upload a picture');
    header('location: ../addNews.php?error='.$error);
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