<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//Create a function that given two numbers returns the sum of both
    function sum($number1, $number2) {
        return $number1 + $number2;
    }
    echo sum(5, 2);
?><br>
<?php
//Create a function that given two numbers returns the multiplication of both
        function multiply($number1, $number2) {
            return $number1 * $number2;
    }
        echo multiply(5, 2);
?><br>
<?php
//Create a function that given two numbers returns the division of both
    function div($number1, $number2) {
            return $number1 / $number2;
    }
        echo div(5, 2);
?><br>
<?php
//Create a function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation.
    function operations($number1, $number2, $operator)
    {
        switch ($operator) {
            case "*":
                return $number1 * $number2;
                break;
            case "/":
                return $number1 / $number2;
                break;
            case "+":
                return $number1 + $number2;
        }
    }
    echo operations(2 , 5, "*");
    echo "<br>";
    echo operations(4, 2, "/");
    echo "<br>";
    echo operations(2 , 5, "+");

?>
</body>
</html>