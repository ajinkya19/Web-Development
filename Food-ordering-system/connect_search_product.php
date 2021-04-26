<html>

<head>

    <link rel="stylesheet" type="text/css" href="styling_all.css">

</head>

<body>

    <header>
        <h1>Welcome to FoodLine</h1>
    </header>

    <div class="sidenav">
        <a href="html_add_product.php">Create Product</a><br>
        <a href="html_delete_product.php">Delete Product</a><br>
        <a href="html_update_product.php">Update Product</a><br>
        <a href="html_connect_admin_panel.php">Show Products</a><br>
        <a href="html_search_product.php">Search Product</a>
    </div>

    <div class="main">
        <h3>The Product details for given product id are :- </h3>

        <?php

include ('main_connection.php');

$Pid5 = $_POST['product_id'];


$sql = "SELECT * FROM Products1 WHERE PID = '$Pid5' ";
$result = mysqli_query( $conn ,$sql);

    

$row = mysqli_fetch_array($result);

$Pname3 = $row['Product_name'];
$Pprice3 = $row['Price'];
 
 
?>

        <table class="main1" style="width:50%">

            <h3>
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                </tr>
            </h3>
            <h4>
                <tr>
                    <td>
                        <?php echo "$Pid5" ?><br></td>
                    <td>
                        <?php echo "$Pname3" ?><br></td>
                    <td>
                        <?php echo "$Pprice3" ?><br></td>
                </tr>
            </h4>
        </table>

    </div>
</body>

<footer>All rights reserved by Foodline corp.</footer>

</html>>