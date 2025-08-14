### Introduction

```
client request for the website.

server returns the response.

```

### Basics of php.

It is important that our project should be in htdocs folder.

```

to write in php we use this syntax and echo also php is non case sensitive. echo and ECHO both are correct.

<?php
    echo "Hello world this is printed using php"
?>

for spacing we use

echo "<br>"

```

### Coding in php

Variables :-

Variables in php are dynamic type means they change their type according to value.

```
 $var = 23;
 echo $var ;

 we can declare a variable and use it like this.

```

---

operators in php

1. Airthmatic operators.
```
        $a = 23;
        $b = 67;

        echo "the value of var a + b is : ";
        echo $a + $b;
        echo "<br>";

        echo "the value of var a - b is : ";
        echo $a - $b;
        echo "<br>";

        echo "the value of var a / b is : ";
        echo $a / $b;
        echo "<br>";

        echo "the value of var a * b is : ";
        echo $a * $b;
        echo "<br>";

        echo "the value of var a % b is : ";
        echo $a % $b;
        echo "<br>";

```

2. Assignment operators.

```
        // = += -= *= /=

        $a = 10;

        $b = $a;

        echo $b;
        echo "<br>";
        echo "b += 1 : ";
        echo $b += 1;
        echo "<br>";
        echo "b /= 1 : ";
        echo $b /= 2;
        echo "<br>";
        echo "b -= 1 : ";
        echo $b -= 2;
        echo "<br>";
        echo "b *= 1 : ";
        echo $b *= 2;
        echo "<br>";
```

3.  comparision operators : boolean datatypes
 in php we have var_dump function. used to tell variable value and type.

 ```
    echo "the value of 5 == 4";
    echo "<br>";
    echo var_dump(5 === 4); // false
    echo "<br>";

    echo "the value of 5 > 4";
    echo "<br>";
    echo var_dump(5 > 4); // true
    echo "<br>";

    echo "the value of 5 < 4";
    echo "<br>";
    echo var_dump(5 < 4); // false
    echo "<br>";

    echo "the value of 5 <= 4";
    echo "<br>";
    echo var_dump(5 >= 4); // true
    echo "<br>";

    echo "the value of 5 >= 4";
    echo "<br>";
    echo var_dump(5 <= 4); // false
    echo "<br>";

    echo "the value of 5 != 4";
    echo "<br>";
    echo var_dump(5 != 4); // true
    echo "<br>";
```

4.  Increment / decrement operator

```
    $var  = 10;

    echo "value of var is : ";
    echo $var;

    echo "<br>";
    echo $var++; // 10
    echo "<br>";
    echo $var--; // 11
    echo "<br>";
    echo ++$var; // 11
    echo "<br>";
    echo --$var; // 10
```

5. Logical operator.



