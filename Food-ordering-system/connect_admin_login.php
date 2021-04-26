<?php 
 
//  $username = filter_input(INPUT_POST, 'name');
//  $password = filter_input(INPUT_POST, 'password');
$username = $_POST['Name'];
$password = $_POST['Password'];

 if (!empty($username)){
if (!empty($password)){
include ('main_connection.php');

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $sql = "INSERT INTO login1 (Fullname, Password)
  values ('$username','$password')";
  if ($conn->query($sql)){
    echo "New record is inserted sucessfully";
  }
  else{
    echo "Error: ". $sql ."
". $conn->error;
  }
  $conn->close();
}
}
else{
  echo "Password should not be empty";
  die();
}
 }
 else{
  echo "Username should not be empty";
  die();
 }

 ?>