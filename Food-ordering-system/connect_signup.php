<?php 
 
 include ('main_connection.php');

$username = $_POST['Name'];
$password = $_POST['Password'];
$email = $_POST['Email'];
$address = $_POST['Address'];

 $sql = "INSERT INTO User1 (Email ,Fullname, Password, Address) values ('$email', '$username','$password','$address')";
  if (mysqli_query($conn,$sql)){
    echo"Data is entered sucessfully";
  }
  header("Location: html_user_login.php")
?>