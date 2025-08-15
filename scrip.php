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
        margin: auto;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 4rem;
    }

    h3 {
        padding: 10px;
        margin: 40px;
        text-align: center;
    }
</style>

<body>
    <h1>Basic of php</h1>


    <div class="container">
        <?php
        $str = "This is string ";
        echo $str;
        echo "<br>";

        $len = strlen($str);
        echo "<br>";
        echo "Length of the string is  : ";
        echo $len;

        //  i can also use (.) for concatinating.
        echo "<br>";
        $newSt = "This is new string";
        $len = strlen($newSt);
        echo "The length is new string is : " . $len;
        // (.) this for adding the two string.
        echo "<br>";
        echo "Number of words in string is : " . str_word_count($newSt);
        echo "<br>";
        echo "The reverse string is : " . strrev($newSt);
        echo "<br>";
        echo "The position of word n in string is : " . strpos($newSt, "n");
        echo "<br>";
        echo "The replaced word in string is : " . str_replace("new", "old", $newSt);




        ?>
    </div>

</body>

</html>