<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: sans-serif;
    }

    html,
    body {
        height: 100%;
        width: 100%;
    }

    .container {
        max-width: 80%;
        background-color: grey;
        height: 80vh;
        margin: auto;
    }

    h3 {
        text-align: center;
    }
</style>

<body>
    <h1>Basic of php</h1>


    <div class="container">

        <?php

        echo "<h3> This is container </h3>";

        $age = 20;

        if ($age > 18) {
            # code...
            echo "you can vote";
        } else  echo "you can't vote";


        ?>
    </div>

</body>

</html>