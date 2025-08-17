<!--  connecting php to sql database using mysqli ( Making connection to databse ) -->
<!-- mysqli extention and php databases -->
<?php

if (isset($_POST['name'])) {
    # code...



    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password); // it should be in this format.

    if (!$con) {
        die("connecting to this databse failed due to" . mysqli_connect_error());
    }

    echo "Succes connecting to the databse.";

    
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel form</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>

<body>
    <div class="container">


        <div class="forms">
            <h3>Welcome to IIT Kharagpur US Trip form.</h3>
            <p>Enter your details to confirm participation in the trip. </p>
            <p class="suc">Thanks for submit the form.</p>
            <form action="index.php" method="post">
                <h1>Sign In</h1>
                <input type="text" name="name" id="name" placeholder="Enter your name">

                <input type="number" name="phone" id="phone" placeholder=" Phone numer">
                <input type="email" name="email" id="email" placeholder="Enter your email.">
                <input type="text" name="gender" id="gender" placeholder="Enter your Gender ">


                </textarea>
                <div class="btns">

                    <button type="submit" class="btn">Submit</button>
                    <button type="reset" class="btn">reset</button>
                </div>
            </form>
        </div>

    </div>

</body>

</html>