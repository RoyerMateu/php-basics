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
//Print a text string
    echo "Print a text string";
?><br>
<?php
//Print a text string that interpret variables
    $varString = "Print a text string that interpret variables";
    echo $varString;
?><br>
<?php
//Concatenate a previously declared variable in a text string
    $varString = "concatenating a declared variable in a text";
    echo "This string is $varString" ;
?><br>
<?php
//Execute the function that allows you to replace text in a string (case sensitive)
    $varString = "Hello world!";
    echo str_replace("world","Changed", $varString);
?><br>
<?php
//Execute the function that allows you to replace text in a string (without taking into account upper / lower case)
    $varString = "Hello World!";
    echo str_ireplace("world","Changed", $varString);
?><br>
<?php
//Execute the function that allows you to write a text N times
    echo str_repeat("Reapeating 5 times the text ", 5);
?><br>
<?php
//Execute the function that allows to obtain the length of a text string
    echo strlen("Tell me how much words there are in this text");
?><br>
<?php
//Executes the function that allows to obtain the position of the first occurrence of a text within a text string
    echo strpos("Tell me the position of paper", "paper");
?><br>
<?php
//Execute the function that allows a text string to be capitalized
    echo strtoupper("Now this will be on uppercase");
?><br>
<?php
//Execute the function that allows you to transform a text string to lowercase
    echo strtolower("NOW THIS WILL BE ON LOWERCASE");
?><br>
<?php
//Execute the function that allows to obtain a text substring from a given position
    $stringText = "This will be showing after is on the 12th position?";
    echo substr($stringText, 12);
?>
</body>
</html>