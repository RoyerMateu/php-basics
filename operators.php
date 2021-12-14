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
//Create an example of use for arithmetic operators: +, -, *, /, and%
    echo (1 + 2)."\n";
    echo (1 - 2)."\n";
    echo (1 * 2)."\n";
    echo (2 / 1)."\n";
    echo (2 % 1)."\n";
?>
<br>
<?php
//Create a usage example for comparison operators: ==,! =, <,>, <=,> =
var_dump(0 == "a");
var_dump(0 != "a");
var_dump(0 < 1);
var_dump(0 > 1);
var_dump(0 <= 0);
var_dump(0 >= 1);
?>
<br>
<?php
//Create an example of use for logical operators: &&, And; ||, Or; ! (NOT); Xor
$x = 100;
$y = 50;
if ($x == 100 and $y == 50) {
    echo "using and working";
}echo "<br>";
if ($x == 100 or $y == 80) {
    echo "using or working";
}echo "<br>";
if ($x == 100 xor $y == 80) {
    echo "using xor working";
}echo "<br>";
if ($x == 100 && $y == 50) {
    echo "using && working";
}echo "<br>";
if ($x == 100 || $y == 80) {
    echo "using || working";
}echo "<br>";
if ($x !== 90) {
    echo "using !== working";
}
?>
</body>
</html>