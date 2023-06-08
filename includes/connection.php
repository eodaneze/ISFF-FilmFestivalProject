<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "festival";

$con = mysqli_connect($hostname, $username, $password, $dbname);

  if(!$con){
      echo "Failed to connect";
  }
?>