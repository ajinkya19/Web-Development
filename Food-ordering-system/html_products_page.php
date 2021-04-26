<!DOCTYPE html>
<html>

<head>

    <?php include ('main_connection.php'); ?>

    <link rel="stylesheet" type="text/css" href="styling_all.css">
</head>

<body>

    <header><h1>FoodLine Product Page</h1></header>

<div class="sidenav">
    
  <a href="html_welcome.php">Home</a>  
  <a href="html_about_us.php">About</a>
  <a href="html_contact_us.php">Contact</a>
  <a href="html_products_page.php">Order Now</a>
</div>

    <div class="main">
        <h3>This is the list of all products</h3><hr>

<?php
$get_data = "select * from Products1";
$query_data = mysqli_query($conn,$get_data);

while ($row_data = mysqli_fetch_array($query_data)){
    $Pid2 = $row_data['PID'];
    $Pname2 = $row_data['Product_name'];
    $Pprice2 = $row_data['Price'];
?>
        <table style="width:50%">
            <tr><th>Product ID</th>
                <th>Product Name</th>
                <th>Product Price</th>
            </tr>
            <tr><td><?php echo "$Pid2" ?><br></td>
                <td><?php echo "$Pname2" ?><br></td>
                <td><?php echo "$Pprice2" ?><br></td>
            </tr>
        </table>
        <?php } ?>
</div>
</body><footer>All rights reserved by Foodline corp.</footer>
</html>