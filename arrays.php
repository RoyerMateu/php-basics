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
//Define a simple array composed of text strings
    $strArr = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday");
    print_r($strArr);
?><br>
<?php
//Define a simple array consisting of whole numbers and decimal numbers
    $strArr = array(2, 5, 6.4, 19.3, 20.5, 44);
    print_r($strArr);
?><br>
<?php
//Define a multidimensional array
    $multiArray = array(array("One", "Two", "Three"), array(1, 2, 3));
    print_r($multiArray);
?><br>
<?php
//Execute the function that allows to obtain the length of an array
    $arrayLength = array(1, 2, 3, 4, 5, 6, 7);
    echo count($arrayLength);
?><br>
<?php
//Execute the function that allows to obtain the combination of two arrays
        $numberArray = array(5, 10, 25);
        $wordsArray = array("One", "Two", "Three");
        print_r(array_combine($numberArray, $wordsArray));
?><br>
<?php
//Execute the function that once is given an array return the last element of it
    $arrayLength = array(1, 2, 3, 4, 5, 6, 7, 8);
    echo end($arrayLength);
?><br>
<?php
//Execute the function that once is given an array add a new element to the array in question
    $arrayLength = array(1, 2, 3,);
    array_push($arrayLength, 4, 5, 6);
    print_r($arrayLength);
?><br>
</body>
</html>