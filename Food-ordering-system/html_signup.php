<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styling_all.css">
</head>

<body>

    <div class="bg-img">
        <div>
            <form action="connect_signup.php" class="main" method="POST">
                <h1>Signup</h1>

                <label for="Name"><b>Name</b></label><br>
                <input type="text" placeholder="Enter Name" name="Name" required><br>

                <label for="email"><b>Email</b></label><br>
                <input type="text" placeholder="Enter Email" name="Email" required><br>

                <label for="psw"><b>Password</b></label><br>
                <input type="password" placeholder="Enter Password" name="Password" required><br>

                <label for="Address"><b>Address</b></label><br>
                <input type="text" placeholder="Enter Address" name="Address" required><br>

                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                <input type="Submit" class="button1" name="Signup">
            </form>
        </div>
    </div>

</body>

</html>