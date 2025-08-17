<!--  connecting php to sql database using mysqli ( Making connection to databse ) -->
<!-- mysqli extention and php databases -->


<?php

$value_is = false;

if (isset($_POST['name'])) {
    # code...


    // set connection variables.
    $server = "localhost";
    $username = "root";
    $password = "";

    // create database connection
    $con = mysqli_connect($server, $username, $password); // it should be in this format.


    // check for connection success.

    if (!$con) {
        die("connecting to this databse failed due to" . mysqli_connect_error());
    }

    // echo "Succes connecting to the databse.";

    // inserting values 
    // here name contain the name which we give in form.

    // collect post variables
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];



    // $sql = "INSERT INTO `trip1`.`trip1` ( `$name`, `$phone`, `$email`, `$gender`, `dt`) VALUES ( 'rishi', '1234567890', 'rishi@1399gamil.com', 'M', current_timestamp())";

    // $sql = "INSERT INTO `form data`.`trip1` (name, phone, email, gender, dt) 
    //     VALUES ('$name', '$phone', '$email', '$gender', current_timestamp())";

    $sql = "INSERT INTO  `trip`.`tripdata` ( `name`, `number`, `email`, `gender`, `dt`)
             VALUES ('$name', '$phone', '$email', '$gender', current_timestamp())";


    // echo $sql 

    // excecute the query

    if ($con->query($sql) === true) {
        // echo "Successfully inserted";
        // flag for successfull insertion
        $value_is = true;
    } else {
        // $not_insert = true;
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    // close the database connection

    $con->close();
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
            <?php

            if ($value_is != true) {
                # code...
                echo "<p class='suc'>Thanks for submitting the form.</p>";
            }

            ?>
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