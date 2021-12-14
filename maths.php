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
//Define a variable whose value is the result of the function that returns an absolute value.
    $negative = -9;
    echo abs($negative);
?><br>
<?php
//Define a variable whose value is the result of the function that returns a rounded value to the next highest integer.
    $roundingUp = 1.23;
    echo ceil($roundingUp);
?><br>
<?php
//Define a variable whose value is the result of the function that returns the highest value of a series of values ​​that are received by parameter.
    $arrayNum = array(2, 5, 10, 50, 200);
    echo max($arrayNum);
?><br>
<?php
//Define a variable whose value is the result of the function that returns the lowest value of a series of values ​​that are received by parameter.
    $arrayNum = array(2, 5, 10, 50, 200);
    echo min($arrayNum);
?><br>
<?php
//Define a variable whose value is the result of the function that returns a random number
    echo rand();
?>
</body>
</html>