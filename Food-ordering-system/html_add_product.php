<html>

<head>

    <link rel="stylesheet" type="text/css" href="styling_all.css">

</head>

<body>

    <header>
        <h1>FoodLine Admin Panel</h1>
    </header>

    <form action="connect_add_product.php" method="post">

        <div class="sidenav">
            <a href="html_add_product.php">Create Product</a><br>
            <a href="html_delete_product.php">Delete Product</a><br>
            <a href="html_update_product.php">Update Product</a><br>
            <a href="html_connect_admin_panel.php">Show Products</a><br>
            <a href="html_search_product.php">Search Product</a>
        </div>

        <div class="main">
            <h3>Please enter PRODUCT details</h3>

            <hr>

            <label for="Product_id"><b>Product ID</b></label><br>
            <input type="int" placeholder="Enter Product ID" name="product_id" required><br>

            <label for="Name"><b>Product Name</b></label><br>
            <input type="text" placeholder="Enter Product Name" name="product_name" required><br>

            <label for="Price"><b>Price</b></label><br>
            <input type="int" placeholder="Enter Price" name="product_price" required><br>

            <div class="submitbtn"></div>
            <!-- <button type="submit" class="submitbtn"> <a href="home.php"> Submit </a> </button> -->
            <input type="submit" class="button1" name="Submit">
        </div>
        </div>

    </form>
</body>

<footer>All rights reserved by Foodline corp.</footer>

</html>