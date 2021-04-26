<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styling_all.css">
</head>

<body>

    <div class="bg-img-login">
        <form action="connect_user_login.php" class="main1">
            <h1>User login</h1>

            <label for="Name"><b>UserName</b></label><br>
        <input type="text" placeholder="Enter Name" name="Name" required><br>

        <label for="Password"><b>Password</b></label><br>
        <input type="text" placeholder="Enter Password" name="Password" required><br>

        <div class="submitbtn"></div>
        <!-- <button type="submit" class="submitbtn"> <a href="home.php"> Submit </a> </button> -->
        <input type="submit" class="button2" name="Submit">
        </form>
    </div>

</body>

</html>