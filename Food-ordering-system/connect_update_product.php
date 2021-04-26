<?php

include ('main_connection.php');

$Pid7 = $_POST['product_id'];
$Pname4 = $_POST['product_name'];
$Pprice4 = $_POST['product_price'];

    $sql = "UPDATE Products1 SET Product_name='$Pname4' , Price= '$Pprice4' WHERE PID= '$Pid7' ";
    if (mysqli_query($conn, $sql)){
        echo"Data is updated sucessfully";
    }
    else{
        echo"Something went wrong";
    }
    header("Location: html_update_product.php");
?>