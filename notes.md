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

# PHP Logical Operators — Complete Guide

This guide explains the four main logical operators in PHP:

- `and` / `&&` → Logical AND
- `or` / `||` → Logical OR
- `^` → Logical XOR (Exclusive OR)
- `!` → Logical NOT

You’ll find **truth tables**, **simple explanations**, and **examples** for each.

---

## 1. `and` / `&&` → Logical AND

**Meaning:**  
Both conditions must be `true` for the result to be `true`.

**Think:**  
_"Both should agree"_

**Truth Table:**
| A | B | A AND B |
|--------|--------|---------|
| true | true | true |
| true | false | false |
| false | true | false |
| false | false | false |

**Example:**

```
php
$a = true;
$b = false;

$result = $a && $b; // or $a and $b
var_dump($result); // false

```

<?php
$values = [true, false];

echo "=== AND (&&) ===\n";
foreach ($values as $a) {
    foreach ($values as $b) {
        var_dump([$a, $b, $a && $b]);
    }
}

echo "\n=== OR (||) ===\n";
foreach ($values as $a) {
    foreach ($values as $b) {
        var_dump([$a, $b, $a || $b]);
    }
}

echo "\n=== XOR (^) ===\n";
foreach ($values as $a) {
    foreach ($values as $b) {
        var_dump([$a, $b, $a ^ $b]);
    }
}

echo "\n=== NOT (!) ===\n";
foreach ($values as $a) {
    var_dump([$a, !$a]);
}
?>

```

# PHP Logical Operators — Complete Guide with Visuals

This guide explains the four main logical operators in PHP:

- `and` / `&&` → Logical AND
- `or` / `||` → Logical OR
- `^` → Logical XOR (Exclusive OR)
- `!` → Logical NOT

You’ll find **truth tables**, **ASCII-style diagrams**, **plain-language explanations**, and **PHP examples** for each.

---

## 1. `and` / `&&` → Logical AND

**Meaning:**
Both conditions must be `true` for the result to be `true`.

**Think:**
_"Both should agree"_

**Truth Table:**
| A      | B      | A AND B |
|--------|--------|---------|
| true   | true   | true    |
| true   | false  | false   |
| false  | true   | false   |
| false  | false  | false   |

**Visual Diagram:**

```

---

### Data types.

data types

```
    1.String
    2.Integer
    3.Float
    4.Array
    5.Object
    6. Boolean
    */

    $a = 'abc';
    $a1 = 12;
    $a2 = 23.14;
    $a3 = [];
    $a4 = null;
    $a5 = true;

    echo "Type of a is : ";
    echo var_dump($a);
    echo "<br>";
    echo "Type of a1 is : ";
    echo var_dump($a1);
    echo "<br>";
    echo "Type of a2 is : ";
    echo var_dump($a2);
    echo "<br>";
    echo "Type of a3 is : ";
    echo var_dump($a3);
    echo "<br>";
    echo "Type of a4 is : ";
    echo var_dump($a4);
    echo "<br>";
    echo "Type of a5 is : ";
    echo var_dump($a5);
```
