<?php

include ('main_connection.php');

$Pid3 = $_POST['product_id'];


$sql = "DELETE from Products1 where PID = $Pid3 ";


    if (mysqli_query($conn, $sql)){
        echo"Data is deleted sucessfully";
    }
    else{
        echo"Something went wrong";
    }
    
    header("Location: html_delete_product.php");
    
?>