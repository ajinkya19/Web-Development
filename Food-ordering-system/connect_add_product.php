<?php

include ('main_connection.php');

$Pid1 = $_POST['product_id'];
$Pname = $_POST['product_name'];
$Pprice = $_POST['product_price'];

$sql = "INSERT into Products1 (PID,Product_name,Price) 
        values ('$Pid1','$Pname','$Pprice')";

if (mysqli_query($conn, $sql)){
    echo"Data is entered sucessfully";
}
else{
    echo"Something went wrong";
}
    header("Location: html_add_product.php");
    
?>